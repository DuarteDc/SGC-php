<?php

namespace App\lib;

class View
{
    public function render(String $name, $data = [])
    {
        require 'src/views' . $name . '.php';
    }
}
