<?php

namespace Home\Controller;

use Think\Controller;

class AuthController extends Controller
{
//    public function login()
//    {
//        return $this->display('/');
//    }

    public function logout()
    {
        cookie('auth',null);
        return redirect('/');
    }

    public function postLogin()
    {
        $user = D('User')->where("username = '".I('post.username')."'")->find();
        if($user && $user['password'] == sha1(I('post.password'))){
            cookie('auth',$user);
            return redirect('/user',1,'登录成功');
        }else{
            return redirect('/',1,'登录失败');
        }
    }

    public function register()
    {
        return $this->display('auth/register');
    }

    public function postRegister()
    {
        if(1){
            $user = $this->create();
            cookie('auth',$user);
            return redirect('/user');
        }else{
            return redirect('/');
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return D('User')->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}