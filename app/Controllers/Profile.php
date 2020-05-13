<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Home;

class Profile extends BaseController
{
	public function __construct() {
		$this->model = new M_Home();
	}
	
	public function index()
	{
		$data = [
            'judul' => 'Profile',
            'isi'   => 'Frontend/V_Profile',
            'identitas' => $this->model->get_identitas()
		];
		return view('Frontend/Layout/Wrapper', $data);
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
