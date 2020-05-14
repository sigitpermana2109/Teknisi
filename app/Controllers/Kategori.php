<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kategori;

class Kategori extends Controller
{
	
	public function __construct()
	{
		$this->model = new M_Kategori();
	}

	public function index()
	{
		$data = [
			'Kategori' => $this->model->getKategori(),
			'isi'	=> 'Admin/Kategori/V_Kategori'
		];
		return view('Admin/Layout/Wrapper', $data);
	}

	public function manageKategori()
	{
		$file = $this->request->getFile('file_upload');
		if ($file->getSize() > 0)
		{
			$file->move(ROOTPATH . '/public/global_assets/images/', $file->getName());
		}
		else {
			return "default.jpg";
		}
		$id_ = $this->request->getPost('id_kategori');
		$nama_kategori = $this->request->getPost('nama_kategori');
		$deskripsi  = $this->request->getPost('deskripsi');
		$no_telp  = $this->request->getPost('no_telp');
		$image = $file->getName();

		$model = new M_Kategori();

		$id = $model->getLastId();
		$id_kategori = ltrim($id->id_kategori, "KT");
		$id_kategori = sprintf('%02d', $id_kategori + 1);
		$id_kategori = "KT".$id_kategori;

		$data = array(
			'id_kategori' 	=> $id_kategori,
			'nama_kategori' => $nama_kategori,
			'deskripsi' 	=> $deskripsi,
			'no_telp' 		=> $no_telp,
			'image' 		=> $image
		);

		if ($id_ == NULL || $id_ == '') {
    		$manage = $model->saveKategori($data);
    	} else{
    		$manage = $model->updateKategori($data, $id_);
    	}

		if ($manage == TRUE)
		{
			session()->setFlashdata('success', 'success');
		}
        return redirect()->to(base_url('Kategori'));
	}

	public function editKategori()
	{
		$file = $this->request->getFile('file_upload');
		if ($file->getSize() > 0)
		{
			$file->move(ROOTPATH . '/public/global_assets/images/', $file->getName());
		}
		else {
			return "default.jpg";
		}
		$id = $this->request->getPost('id_kategori');
		$nama_kategori = $this->request->getPost('nama_kategori');
		$deskripsi  = $this->request->getPost('deskripsi');
		$no_telp  = $this->request->getPost('no_telp');
		$image = $file->getName();

		$model = new M_Kategori();

		$data = array(
			'id_kategori' 	=> $id,
			'nama_kategori' => $nama_kategori,
			'deskripsi' 	=> $deskripsi,
			'no_telp' 		=> $no_telp,
			'image' 		=> $image
		);

		$save = $model->updateKategori($id, $data);
		if ($save == TRUE)
		{
			session()->setFlashdata('success', 'success');
		}
        return redirect()->to(base_url('Kategori'));
	}

	public function Remove($id)
	{
		$model = new M_Kategori();
		$remove = $model->deleteKategori($id);
		if ($remove == TRUE) {
			session()->setFlashdata('success', 'success');
		}
		return redirect()->to(base_url('Kategori'));
	}
}