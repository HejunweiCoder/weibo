<?php

namespace Admin\Controller;

use Common\Controller\AuthController;
use Think\Controller;

class IndexController extends AuthController
{
    public function index()
    {
        echo 'index admin';
    }

    public function login()
    {
        echo 'login admin';
    }
}