<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class StudentController extends Controller {

    public function infoAction() {
        $id = (int) $_POST['student'];
        $result = $this->model->getStudent($id);
        $vars = [
            'student' => $result,
        ];
        $this->view->render('Личное дело', $vars);
    }
}

