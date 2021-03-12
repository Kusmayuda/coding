<?php

namespace App\Controllers\admin;

class Dashboard extends BaseController
{
	public function index()
	{
		if (session()->get('log') == true) {
			$data['barActive'] = "dashboard";
			return view('admin/index', $data);
		} else {
			return redirect()->to('/admin/login');
		}
		//return view('admin/login');	
	}
}
