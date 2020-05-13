<?php namespace App\Controllers;

class Home_Admin extends BaseController
{
	public function index()
	{
		$data = [
			'isi' => 'Admin/V_Home'
		];
		return view('Admin/Layout/Wrapper', $data);
	}
	//--------------------------------------------------------------------

}
