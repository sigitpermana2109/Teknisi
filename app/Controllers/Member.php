<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Akun;

class Member extends BaseController
{
	public function __construct() {
		$this->model = new M_Akun();
	}

	public function index()
	{
		$data = [
			'Member' => $this->model->get_member(),
			'isi' => 'Admin/User/V_Member'
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
		$nama_depan 	= $this->request->getPost('nama_depan');
		$nama_belakang 	= $this->request->getPost('nama_belakang');
		$tgl_lahir 		= $this->request->getPost('tgl_lahir');
		$jk 			= $this->request->getPost('jk');
    	$password1 		= $this->request->getPost('password1');
    	$password2 		= $this->request->getPost('password2');
    	$email 			= $this->request->getPost('email');
    	$no_telp 		= $this->request->getPost('no_telp');
		$foto 			= $file->getName();
		if ($jk === "Wanita") {
			$gender = 2;
		} else {
			$gender = 1;
		}
		$id_member 		= "M".date('Ymdhis').$gender;
		$model = new M_Akun();
        $data = array(
			'id_member'		=> $id_member,
			'nama_depan'	=> $nama_depan,
			'nama_belakang' => $nama_belakang, 		
			'email' 		=> $email,
			'tgl_lahir'		=> $tgl_lahir,
			'jk'			=> $jk,
    		'no_telp' 		=> $no_telp,
			'foto'			=> $foto,
			'date_created' 	=> time(),
			'active'		=> "Tidak Aktif",
    		'password' 		=> password_hash($password1, PASSWORD_DEFAULT)
		);
		
		$save = $model->saveMember($data);
		if ($save == TRUE)
		{
			session()->setFlashdata('success', 'success');
		}
        return redirect()->to(base_url('Member'));
	}

	public function Hapus($id)
	{
		$model = new M_Akun();
		$hapus = $model->delete_member($id);
		$cek = $model->cekData($id);
		if ($cek == NULL) {
			session()->setFlashdata('success', 'success');
		}else {
			session()->setFlashdata('gagal','gagal');
		}
		return redirect()->to(base_url('Member'));
	}

	//--------------------------------------------------------------------

}
