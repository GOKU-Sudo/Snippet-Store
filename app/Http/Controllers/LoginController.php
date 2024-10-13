<?php

namespace App\Http\Controllers; // Define the namespace for the controller

use Illuminate\Http\Request; // Import the Request class from the Illuminate\Http namespace
use Illuminate\Support\Facades\Auth; // Import the Auth class from the Illuminate\Support\Facades namespace
use Illuminate\Support\Facades\Validator; // Import the Validator class from the Illuminate\Support\Facades namespace
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash; // Import the Hash class from the Illuminate\Support\Facades namespace

class LoginController extends Controller // Define the LoginController class that extends the base Controller class
{
    //
    public function index(){ // Define the index method
        return view('login'); // Return the 'login' view
    }

    public function authenticate(Request $request){ // Define the authenticate method that accepts a Request object
        $validator=Validator::make($request->all(), [ // Create a validator instance with the request data and validation rules
            'email'=>'required|email', // The email field is required and must be a valid email address
            'password'=>'required' // The password field is required
        ]);
        if($validator->passes()){ // Check if the validation passes
            // Placeholder for authentication logic
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
                if(Auth::user()->role!='user'){
                    Auth::logout();
                    return redirect()->route("account.login")->with('error',"Either email or password is incorrect"); // Redirect back to the login route with an error message if the user is not a user
                }
                return redirect()->route("account.dashboard");

            }
            else{
                return redirect()->route("account.login")->with('error',"Either email or password is incorrect");
            }
        }
        else{ // If validation fails
            return redirect()->route('account.login')->withInput()->withErrors($validator); // Redirect back to the login route with input and validation errors
            // The withInput method will flash the input data to the session so it can be retrieved later
            //withInput will repopulate the form fields with the input data
        }

    }

    public function register(){
        return view('register');
    }

    public function processRegister(Request $request){

        $validator=Validator::make($request->all(), [ // Create a validator instance with the request data and validation rules
            'email'=>'required|email|unique:users', // The email field is required and must be a valid email address
            'password'=>'required|confirmed', // The password field is required
            'name'=>'required',
            'password_confirmation'=>'required'
        ]);
        if($validator->passes()){ // Check if the validation passes
            $user=new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->role='user';
            $user->password=Hash::make($request->password);
            $user->save();

            return redirect()->route('account.login')->with('success', 'You have been registered');
    
        }
        else{ // If validation fails
            return redirect()->route('account.register')->withInput()->withErrors($validator); // Redirect back to the login route with input and validation errors
            // The withInput method will flash the input data to the session so it can be retrieved later
            //withInput will repopulate the form fields with the input data
        }


    }

    public function logout(){
        Auth::logout(); // invalidate the current session and log the user out
        return redirect()->route("account.login");
    }
}
