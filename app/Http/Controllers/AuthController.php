<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{

	public function register(Request $request)
	{
		$user = User::create([

			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'password' => Hash::make($request->input('password'))

		]);

		return $user;
	}


    public function User()
    {
    	return 'Authenticated user';
    }


}
