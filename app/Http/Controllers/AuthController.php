<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * Handles user registration, hashes password for security
     */
    public function register(Request $request) {
        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return $user;
    }

    /**
     * Handles user login
     */
    public function login(Request $request) {
        // if credentials are invalid return status 401 (unauthorized) with response string
        if (!Auth::attempt($request->only('email','password'))) {
            return response([
                'message' => 'Invalid credentials'
            ], 401);
        }
        //this block only runs when authentication is successfull

        //authenticates user
        $user = Auth::user();
        //generates a JWT token using sanctum
        $token = $user->createToken('token')->plainTextToken;

        $request->headers->set('Authorization', "Bearer {$token}");

        // return $token;
        //stores the JWT token in the http request as a cookie for security purposes
        $cookie = cookie('jwt', $token, 60 * 24);

        //returns response with data
        return response([
            'message' => 'Login successfull'
        ])->withCookie($cookie);
    }

    public function user() {
        return Auth::user();
    }
}
