<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Home;
use App\Models\M_Layanan;

class Home extends BaseController
{
    public function __construct() {
        $this->model = new M_Home;
        $this->layanan = new M_Layanan;
    }

	public function index()
	{
		$data = [
            'judul'     => 'Beranda',
            'isi'       => 'Frontend/V_Home',
            'layanan'   => $this->layanan->getKategoriHome(),
            'banner'    => $this->model->get_banner(),
            'identitas' => $this->model->get_identitas()
		];
		return view('Frontend/Layout/Wrapper', $data);
    }
    
    public function Layanan()
	{
		$data = [
            'judul' => 'Layanan',
            'isi'   => 'Frontend/V_Layanan',
            'layanan'  => $this->layanan->getKategori(),
            'identitas' => $this->model->get_identitas()
		];
		return view('Frontend/Layout/Wrapper', $data);
	}
	//--------------------------------------------------------------------

}
