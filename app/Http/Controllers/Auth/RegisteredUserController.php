<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\People;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('users.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            //Validacion People
            "avatar" => "nullable|image|max:2000",
            "name" =>  "required|string|max:40",
            "lastname" => "required|string|max:30",
            "birthdate" => "required|date|before:tomorrow",
            "birthplace" => "nullable|string|max:100",

            //Validacion Usuario
            'username' => "required|string|max:30|unique:.users",
            'phone' => "required|string|max:20|unique:.users",
            'email' => "required|string|lowercase|email|max:40|unique:.users",
            'password' => "required|confirmed",
        ]);

        $person = People::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'birthplace' => 'Mexico',

        ]);

        $user = User::create([
            'people_id' => $person->id,
            'username' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('index');
    }
}
