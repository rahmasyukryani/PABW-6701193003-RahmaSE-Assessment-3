<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsitekModel extends Model
{
    protected $table = 'arsitek';
    protected $allowedFields = ['NIA', 'password', 'nama'];

    public function getRandomId()
    {
        $query = $this->db->table('arsitek');
        $query->select('arsitek.id');
        $query->orderBy('arsitek.id', 'RANDOM');
        $query->limit(1);

        $result = $query->get()->getRow();

        if (isset($result)) {
            $id = $result->id;
        } else {
            $id = 0;
        }
        return $id;
    }
}
