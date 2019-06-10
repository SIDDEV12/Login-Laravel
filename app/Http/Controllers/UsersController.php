<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\User;

class UsersController extends Controller
{
    function register()
    {
    	return view('users.register');
    }

    function show()
    {
    	$users = DB::table('users')->get();
    	return view('users.show', compact('users'));
    } 

    function store(Request $request)
    {
    	$request->validate([
    		'username'=>'required',
    		'password'=>'required | min:5',
    		'password2'=>'required'
    	],[
    		'username.required'=>'Veuillez remplir Le nom '	,
    		'password.min'=>'Le nom doit etre 5 characteres au minimum'	,
    		'password.required'=>'Veuillez remplir Le mot de passe ',
    		'password2.required'=>'Veuillez confirmer le mot de passe'
    	]

    	);

    	$user = new User;

    	$user->username = $request->username;
    	$user->password = $request->password;

    	$user->save();

    	return back();
    }
}
