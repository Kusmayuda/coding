<?php

namespace App\Controllers\admin;
use App\Models\Login_model;


class Login extends BaseController
{
	protected $loginModel;

	public function __construct()
	{
		$this->loginModel = new Login_model();
	}
	public function index()
	{
		if(!(session()->get('log')==true)){
			$data['validation'] = \Config\Services::validation();
			return view('admin/login',$data);		
		}else{
			return redirect()->to('/admin/dashboard');
		}

		// return view('admin/login');		
	}
	public function verifikasi(){
		if (!$this->validate([
			'username' => [
				'rules' => 'required',
				'errors' => [
					'required' => '*Isi dulu username nya browww.',
				]
			],
			'password' => [
				'rules' => 'required',
				'errors' => [
					'required' => '*password kau mane.'
				]
			],
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/admin/login')->withInput()->with('validation', $validation);
		}
		$username=$_POST['username'];
		$password=$_POST['password'];
		//dd($this->loginModel->verifikasi($username,$password));
		$verifikasi=$this->loginModel->verifikasi($username,$password);
	
		if($verifikasi){
			$this->loginModel->password_update($username,$password);
			$user=$this->loginModel->getData($username);
			foreach($user as $nilai){
				$data = [
					'log' => true,
					'username' => $nilai['username'],
					'img' => $nilai['img'],
				];
			}
			session()->set($data);
			return redirect()->to('/admin/dashboard');
		}else{
			session()->setFlashdata('gagalLogin', 'Username dan Password salah CUI....');
			return redirect()->to('/admin/login')->withInput();
		}
	}
	
}
