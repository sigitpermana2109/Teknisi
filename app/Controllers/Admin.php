<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Akun;

class Admin extends BaseController
{
	public function index()
	{
		$model = new M_Akun();
		$data = [
			'admin' => $model->get_admin(),
			'isi' => 'Admin/User/V_Admin'
		];
		return view('Admin/Layout/Wrapper', $data);
	}

	public function Tambah()
	{
		$id = $this->request->getPost('id_admin');
		$file = $this->request->getFile('file_upload');
		if ($file->getSize() > 0)
		{
			$file->move(ROOTPATH . '/public/global_assets/images/', $file->getName());
		}
		else {
			return "default.jpg";
		}
    	$nama_lengkap 	= $this->request->getPost('nama_lengkap');
    	$password1 		= $this->request->getPost('password1');
    	$password2 		= $this->request->getPost('password2');
    	$email 			= $this->request->getPost('email');
    	$no_telp 		= $this->request->getPost('no_telp');
		$foto 			= $file->getName();
		
		$model = new M_Akun();
        $data = array(
    		'nama_lengkap'	=> $nama_lengkap, 		
    		'email' 		=> $email,
    		'no_telp' 		=> $no_telp,
    		'foto'			=> $foto,
    		'password' 		=> password_hash($password1, PASSWORD_DEFAULT)
		);
		
		$save = $model->saveAdmin($data);
		if ($save == TRUE)
		{
			session()->setFlashdata('success', 'success');
		}
        return redirect()->to(base_url('Admin'));
	}

	public function Hapus($id)
	{
		$model = new M_Akun();
		$hapus = $model->delete_admin($id);
		if ($hapus == TRUE) {
			session()->setFlashdata('success', 'success');
		}
		return redirect()->to(base_url('Admin'));
	}

}
	//--------------------------------------------------------------------
