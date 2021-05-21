<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
	public function index()
	{
		return view('Auth/login');
	}
	
	public function register()
	{
		return view('Auth/register');
	}
}
