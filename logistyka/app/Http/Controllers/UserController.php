<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
    * Wyświetla formularz dodawania użytkownika
    **/

    public function create(){
    	return view('user.create');
    }


    /**
    *Zapisuje użytkownika do tabeli
    **/
    public function store(){
    	$input = Request::all();
    	User::create($input);
    	
    }
}
