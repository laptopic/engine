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

    public function template($view) {

        foreach($this->data as $k=>$v) $$k=$v;

        $content_main = $this->load_template($view);

        if(file_exists("views/{$this->layout}.php"))
            include "views/{$this->layout}.php";
    }


    public function load_template($view) {

        foreach($this->data as $k=>$v) $$k=$v;

        ob_start();
        if(file_exists("views/$view.php"))
            include "views/$view.php";

        $template = ob_get_contents();
        ob_end_clean();
        return $template;
    }

}