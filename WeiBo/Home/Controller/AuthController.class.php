<?php

namespace Home\Controller;

use Think\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return $this->display('auth/login');
    }

    public function postLogin()
    {
        $user = D('User')->where("username='".I('post.username')."'")->find();
        if($user && $user['password'] == sha1(I('post.password'))){
            session('user',$user);
            return redirect('/user',1,'登录成功');
        }else{
            return redirect('/login',1,'登录失败');
        }
    }

    public function register()
    {
        return $this->display('auth/register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}