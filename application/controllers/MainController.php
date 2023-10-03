<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller {

    public function indexAction() {
        $result = $this->model->getStudent();
        $vars = [
            'students' => $result,
        ];
        $this->view->render('Таблица студентов', $vars);
    }

}

?>