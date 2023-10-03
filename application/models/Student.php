<?php

namespace application\models;

use application\core\Model;

class Student extends Model {

    public function getStudent(int $id) {
        if (empty(($id))) {
            return []; 
        } 
        
        $result = $this->db->row('SELECT * FROM studens JOIN additional_info ON studens.id=additional_info.id WHERE studens.id = '. $id);

        return $result;
    }
}

?>