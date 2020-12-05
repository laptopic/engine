<?php

namespace App\Controllers;
use \App\Lib\MySQL;

class BaseController
{

    protected $db;
    protected $layout = "layout";
    protected $data = array();

    public function __construct(){

        $this->db = new MySQL();

    }

    public function render($view){
        extract($this->data);
        $path = 'App/Views/' . $view . '.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'App/Views/' . $this->layout . '.php';
        }
    }
}