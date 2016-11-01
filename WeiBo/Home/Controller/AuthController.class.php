<?php

namespace Home\Controller;

use Think\Verify;
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
        return $this->redirect('/');
    }

    public function postLogin()
    {
        if((new Verify())->check(I('post.verify'))){
            $user = D('User')->where("username = '".I('post.username')."'")->find();
            if($user && $user['password'] == sha1(I('post.password'))){
                cookie('auth',$user);
                return $this->ajaxReturn('success');
            }else{
                return $this->ajaxReturn('请输入正确的用户名和密码');
            }
        }else{
            return $this->ajaxReturn('验证码不正确');
        }

    }

    public function register()
    {
        return $this->display('auth/register');
    }

    public function postRegister()
    {
        if(IS_AJAX){
            $data = [
                'username' => I('post.username'),
                'email' => I('post.email'),
                'password' => I('post.password'),
            ];
            $user = D('User');
            if($user->create($data)){
                $user->add();
                cookie('auth',$data);
                $this->ajaxReturn('success');
            }else{
                $this->ajaxReturn($user->getError());
            }
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