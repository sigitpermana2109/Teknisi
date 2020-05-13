<?php namespace App\Models;
Use CodeIgniter\Model;

class M_Layanan extends Model
{
	public function __construct() {
        $db      = \Config\Database::connect();
        $this->kategori = $db->table('t_kategori');
    }

	public function getKategori()
	{
		return $this->kategori->get()->getResult();
	}

	public function getKategoriHome()
	{
		return $this->kategori->limit(2)->get()->getResult();
	}
}