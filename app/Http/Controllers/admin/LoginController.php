<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.login');
    }

    // Define the authenticate method that accepts a Request object
    //Authenticate the admin 
    public function authenticate(Request $request){ // Define the authenticate method that accepts a Request object
        $validator=Validator::make($request->all(), [ // Create a validator instance with the request data and validation rules
            'email'=>'required|email', // The email field is required and must be a valid email address
            'password'=>'required' // The password field is required
        ]);
        if($validator->passes()){ // Check if the validation passes
            // Placeholder for authentication logic
            if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){

                if(Auth::guard('admin')->user()->role!="admin"){
                    Auth::guard("admin")->logout();
                    return redirect()->route("admin.login")->with('error',"You are not authorized to access this page");
                    // return redirect("admin.login");
                }

                
                return redirect()->route("admin.dashboard");

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

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    

 
}
