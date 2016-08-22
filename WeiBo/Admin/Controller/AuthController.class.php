<?php

namespace Admin\Controller;

use Think\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return $this->display('auth/login');
    }

    public function logout()
    {
        session('admin',null);
        return redirect('/admin/login');
    }

    public function postLogin()
    {
        $admin = D('Admin')->where("name = '".I('post.username')."'")->find();
        if($admin && $admin['password'] == sha1(I('post.password'))){
            session('admin',$admin);
            return redirect('/admin');
        }else{
            session('error','用户名或密码错误');
            return redirect('/admin/login');
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