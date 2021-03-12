<?php

namespace App\Controllers\admin;
use App\Models\Login_model;


class Logout extends BaseController
{
	protected $loginModel;

	public function __construct()
	{
		$this->loginModel = new Login_model();
	}
	public function index()
	{ 
		session_destroy();
		return redirect()->to('/admin/dashboard');

		// return view('admin/login');		
	}
	
	
}
