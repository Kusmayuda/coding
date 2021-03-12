<?php

namespace App\Controllers;

use App\Models\Home_model;

class Home extends BaseController
{
	protected $homeModel;

	public function __construct()
	{
		$this->homeModel = new Home_model();
	}

	public function index()
	{
		$data['data'] = $this->homeModel->getData();
		return view('depan/dashboard', $data);
	}
	public function pengumuman()
	{

		$data['data'] = $this->homeModel->getDatapengumuman();
		$data['matkul'] = $this->homeModel->getnamaMatkul();
		return view('depan/pengumuman', $data);
	}
	public function singlePost($id)
	{

		$data['data'] = $this->homeModel->getDatasingle($id);
		$data['matkul'] = $this->homeModel->getnamaMatkul();
		return view('depan/single', $data);
	}
}
