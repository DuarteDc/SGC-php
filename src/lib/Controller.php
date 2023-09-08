<?php

namespace App\lib;

use App\lib\View;

class Controller
{

    private View $view;

    public function __construct()
    {
        $this->view = new view;
    }


    public function render(String $name, array $data = [])
    {
        $this->view->render($name, $data);
    }

    public function post(String $param)
    {
        if (!isset($_POST[$param])) return null;

        return $_POST[$param];
    }

    public function get(String $param)
    {
        if (!isset($_GET[$param])) return null;

        return $_GET[$param];
    }
}
