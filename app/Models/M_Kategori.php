<?php namespace App\Models;
Use CodeIgniter\Model;

class M_kategori extends Model
{
	public function __construct() {
        $db      = \Config\Database::connect();
        $this->kategori = $db->table('t_kategori');
    }

	public function getKategori()
	{
		return $this->kategori->get()->getResult();
	}

	public function saveKategori($data)
	{
		$query = $this->kategori->insert($data);
		return $query;
	}

	public function updateKategori($data, $id)
	{
		$query = $this->kategori->update($data, array('id_kategori' => $id));
		return $query;
	}

	public function deleteKategori($id)
	{
		$query = $this->kategori->delete(['id_kategori' => $id]);
		return $query;
	}

	public function getLastId()
	{
		
		$this->kategori->select('id_kategori');
		$this->kategori->orderBy('id_kategori', 'DESC');
		$query =  $this->kategori->get();
		return $query->getRow();
	}
}