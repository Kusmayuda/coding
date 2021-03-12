<?php

namespace App\Controllers\admin;

use App\Models\Post_model;


class Post extends BaseController
{
	protected $postModel;

	public function __construct()
	{
		$this->postModel = new Post_model();
	}
	public function index()
	{
		if (session()->get('log') == true) {
			$data['barActive'] = "Tasks";
			$data['dashboard'] = "null";
			return view('post/post', $data);
		} else {
			return redirect()->to('/admin/login');
		}
		// return view('admin/login');		
	}
	public function viewPost()
	{
		if (session()->get('log') == true) {
			$data['barActive'] = "Tasks";
			$data['dashboard'] = "null";
			$data['jumlah_tugas'] = $this->postModel->hitungJumlah();
			$data['nama_matkul'] = $this->postModel->getNama();
			return view('post/view_post', $data);
		} else {
			return redirect()->to('/admin/login');
		}
		// return view('admin/login');		
	}
	public function hapusPost()
	{

		if (session()->get('log') != true) {
			return redirect()->to('/');
		}
		$id = $_POST['kode'];
		$this->postModel->hapusPost($id);
		session()->setFlashdata('msg', 'Sukses Dihapus');
		return redirect()->to('/admin/post/viewPost');
	}
	public function editPostlink($id)
	{
		if (session()->get('log') != true) {
			return redirect()->to('/');
		}
		$data['edit'] = $this->postModel->editPost($id);
		$data['barActive'] = "Tasks";
		$data['dashboard'] = "null";
		return view('post/edit_post', $data);
	}
	public function editPost()
	{
		if (session()->get('log') != true) {
			return redirect()->to('/');
		}
		$id = $_POST['kode'];

		return redirect()->to('/admin/post/editPostlink/' . $id);
	}
	public function ubahStatus()
	{
		if (session()->get('log') != true) {
			return redirect()->to('/');
		}
		$id = $_POST['kode'];
		$status = $_POST['status'];
		if ($status == 'ON') {
			$status = 1;
		} else {
			$status = 0;
		}
		$this->postModel->ubahStatus($id, $status);
		session()->setFlashdata('msg1', 'Sudah Diubah');
		return redirect()->to('/admin/post/viewPost');
	}
	public function ambilDataPost()
	{
		if (session()->get('log') == null) {
			return redirect()->to('/admin/login');
		}
		$data_post = $this->postModel->ambilDataPost();

		header('Content-Type: application/json');
		echo json_encode($data_post);
	}
	public function uploadPost()
	{
		if (session()->get('log') != true) {
			return redirect()->to('/');
		}
		$judul = $_POST['judul'];
		//dd($_POST['postby']);
		$postby = $_POST['postby'];
		$deskripsi = $_POST['deskripsi'];
		$content = $_POST['textarea'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		$id_matkul = $_POST['matkul'];
		if (file_exists($this->request->getFile('thumbnail'))) {
			$file = $this->request->getFile('thumbnail');
			$thumbnail = $file->getRandomName();
			$file->move('./img/thumbnail', $thumbnail);
			// $thumbnail = $file->getName();
		} else {
			$thumbnail = "avat.png";
		}
		$data = [
			'judul' => $judul,
			'startdate' => $startdate,
			'enddate' => $enddate,
			'thumbnail' => $thumbnail,
			'postby' => $postby,
			'content' => $content,
			'status' => 1,
			'deskripsi' => $deskripsi,
			'id_matkul' => $id_matkul,
		];
		// dd($data);
		if (!($judul == "")) {
			$this->postModel->tambah_data($data);
			return redirect()->to('/');
		}
		//dd($data);
		session()->setFlashdata('gagal', 'Gagal Memposting Content');
		return redirect()->to('/admin/post');
	}
	public function editPost_content($id)
	{
		if (session()->get('log') != true) {
			return redirect()->to('/');
		}
		$judul = $_POST['judul'];
		//dd($_POST['postby']);
		$postby = $_POST['postby'];
		$deskripsi = $_POST['deskripsi'];
		$content = $_POST['textarea'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		$id_matkul = $_POST['matkul'];
		if (file_exists($this->request->getFile('thumbnail'))) {
			$file = $this->request->getFile('thumbnail');
			$thumbnail = $file->getRandomName();
			$file->move('./img/thumbnail', $thumbnail);
			// $thumbnail = $file->getName();
		} else {
			$thumbnail = $_POST['thumbnails'];
		}
		$data = [
			'judul' => $judul,
			'startdate' => $startdate,
			'enddate' => $enddate,
			'thumbnail' => $thumbnail,
			'postby' => $postby,
			'content' => $content,
			'status' => 1,
			'deskripsi' => $deskripsi,
			'id_matkul' => $id_matkul,
		];
		// dd($data);
		if (!($judul == "")) {
			$this->postModel->edit_data($data, $id);
			return redirect()->to('/');
		}
		//dd($data);
		session()->setFlashdata('gagal', 'Gagal Mengedit Content');
		return redirect()->to('/admin/post');
	}
}
