<?php namespace App\Models;
use CodeIgniter\Model;

class M_Akun extends Model
{
    public function __construct() {
        $db      = \Config\Database::connect();
        $this->data = $db->table('t_admin');
        $this->member = $db->table('t_member');
    }

    //-----------------ADMIN----------------//

	public function get_admin()
	{
		return $this->data->get()->getResult();
    }
    
    public function saveAdmin($data)
    {
        $query = $this->data->insert($data);
        return $query;
    }

    public function delete_admin($id)
	{
		$query = $this->data->delete(['id_admin' => $id]);
        return $query;
    }

    //-----------------MEMBER------------------//

    public function get_member()
    {
        $query = $this->member->get()->getResult();
        return $query;
    }

    public function saveMember($data)
    {
        $query = $this->member->insert($data);
        return $query;
    }

    public function delete_member($id)
	{
		$query = $this->member->delete(['id_member' => $id]);
        return $query;
    }

    public function cekData($id)
	{
		$query = $this->member->where(['id_member' =>$id])->get()->getRow();
        return $query;
    }

	//--------------------------------------------------------------------

}
