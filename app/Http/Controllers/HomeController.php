<?php

namespace App\Http\Controllers;

use App\Models\Laravelform;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.form');
    }

    public function register(Request $request)
    {
        $request->validate([
            'firstname' => 'required',

            'lastname' => 'required',

            'email' => 'required|unique:laravelforms',

            'password' => 'required|max:6 min:4|confirmed',

            'country' => 'required',

            'gender' => 'required',

            'message' 
        ]);

        $partner = new Laravelform();
        $partner -> firstname = $request->firstname;

        $partner -> lastname = $request->lastname;

        $partner -> email = $request->email;

        $partner -> password= Hash::make($request->password);

        $partner -> country = $request->country;

        $partner -> gender = $request->gender;

        $partner -> message = $request->message;

        $partner->save();

        return redirect()->back()->with('message', 'You have Successfully Registered! We Will Be In Touch.');
    }
}
