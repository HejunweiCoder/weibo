<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2016/7/31
 * Time: 12:10
 */

namespace Common\Controller;

use Think\Auth;
use Think\Controller;

class AuthController extends Controller
{
    protected function _initialize()
    {
        $auth = new Auth();
        if(!$auth->check()){

        }
    }


}