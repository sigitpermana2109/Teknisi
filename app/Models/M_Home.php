<?php namespace App\Models;
use CodeIgniter\Model;

class M_Home extends Model
{
    public function __construct() {
        $db      = \Config\Database::connect();
        $this->banner = $db->table('t_banner');
        $this->identitas = $db->table('t_identitas');
    }

    //-----------------ADMIN----------------//


    //-----------------MEMBER------------------//

    public function get_banner()
    {
        $query = $this->banner->get()->getResult();
        return $query;
    }

    public function get_identitas()
    {
        $query = $this->identitas->get()->getRow();
        return $query;
    }


	//--------------------------------------------------------------------

}
