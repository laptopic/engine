<?php


namespace App\Controllers;


class MainController extends BaseController
{

    public function index(){

        $result = $this->db->rows("select * from users");
        $this->data = [
            'result' => $result,
        ];
        $this->render('index');
    }

    public function error(){

        $code = isset($_GET['page']) ? $_GET['page'] : '404';
        $this->render($code);
    }


}