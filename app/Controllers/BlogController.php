<?php

namespace App\Controllers;

class BlogController
{

    public function index()
    {
        echo 'Je suis ton père';
    }

    public function show(int $id)
    {
        echo 'Je suis le post' . $id;
    }
}
