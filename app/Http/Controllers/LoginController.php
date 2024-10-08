<?php

namespace App\Http\Controllers; // Define the namespace for the controller

use Illuminate\Http\Request; // Import the Request class from the Illuminate\Http namespace
use Illuminate\Support\Facades\Validator; // Import the Validator class from the Illuminate\Support\Facades namespace

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
        }
        else{ // If validation fails
            return redirect()->route('account.login')->withInput()->withErrors($validator); // Redirect back to the login route with input and validation errors
        }
    }
}
