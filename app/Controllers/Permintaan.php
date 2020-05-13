<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Home;

class Permintaan extends BaseController
{
	public function __construct() {
		$this->model = new M_Home();
	}
	public function index()
	{
		$data = [
			'isi' => 'Admin/Permintaan/V_Permintaan'
		];
		return view('Admin/Layout/Wrapper', $data);
    }
    
    public function Disetujui()
	{
		$data = [
			'isi' => 'Admin/Permintaan/V_P_Setuju'
		];
		return view('Admin/Layout/Wrapper', $data);
	}

	// MEMBER

	public function Member()
	{
		$data = [
            'judul' => 'Permintaan Konsumen',
			'isi'   => 'Frontend/V_Permintaan',
			'identitas' => $this->model->get_identitas()
		];
		return view('Frontend/Layout/Wrapper', $data);
	}

	//--------------------------------------------------------------------

}
