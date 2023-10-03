<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

    public function getStudent() {
        $result = $this->db->row('SELECT * FROM studens');
        return $result;
    }
}

?>
