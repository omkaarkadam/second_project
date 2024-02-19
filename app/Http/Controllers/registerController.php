<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Register;

class registerController extends Controller
{
    //registration process
   public function reg(Request $request)
{
    $request->validate([
            'username' => 'required|string|max:255',
            'mob_no' => 'required|string|max:255',
            'email' => 'required|email|unique:registers',
            'password' => 'required|string|min:8',
        ]);

        $email = $request->email;
        $user = DB::table('registers')->where('email', $email)->first();

        if ($user !== null && $user->email === $email) {
            // Email already exists in the database
            return redirect()->back()->with('email_exists', 'Email ID is Already Used');
        } else {
            // Email does not exist, proceed with registration
            Register::create($request->all());

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Registration successful');
        }
    }



    // Login Processs


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

            

        $user = DB::table('registers')->where('email', $request->email)->first();
    

        $pass=$request->password;
        $password=$user->password;

        if ($user && $pass==$password) {
            // Password matches, consider the user logged in
            // You can perform additional checks or custom logic here
             $data = $request->input('email');
            Session()->put('email',$data);

            return redirect('profile'); // Redirect to your intended page after successful login
        }

        return redirect()->back()->withErrors(['email' => 'Invalid email or password.']); // Redirect back with an error message
    }
}
