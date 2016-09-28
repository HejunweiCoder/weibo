<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2016/5/31
 * Time: 21:18
 */
namespace Home\Controller;

use Common\Model\UserModel;
use Think\Controller;
use Think\Model;
use Think\Page;
use Think\Upload;

class UserController extends Controller\RestController
{
    public function __construct()
    {
        parent::__construct();
        if (cookie('auth')) {
            $this->assign('auth', cookie('auth'));
        } else {
            $this->redirect('/');
        }
        IS_PJAX ?: layout(true);
    }

    public function index()
    {
//        redirect('https://www.baidu.com',5,'页面跳转中');
        $users = D('User');
        $page = new Page($users->count(), 10);
        $page->lastSuffix = false;//最后一页不显示为总页数
        $this->assign('users', $users->limit($page->firstRow, $page->listRows)->relation(true)->select());
        $page->show();
        $this->assign('totalPages', $page->totalPages);
//        dump($users);
//        die;
        $this->display('index');
    }

    public function create()
    {
        $this->display('create');
    }

    public function edit($id)
    {
        $user = D('User')->where("id=$id")->find();
        $post = D('Post')->relation(true)->where("id=$id")->find();
        $this->assign('user', $user);
        $this->assign('post', $post);
        $this->display('edit');
    }

    public function show($id)
    {
        $user = D('User')->where("id=$id")->find();
        $this->assign('user', $user);
//        $this->display('show');
        return $this->display('show');
    }

    public function store()
    {
        $user = D('User');
        $data['username'] = 'hejunwei';
        $data['email'] = 'hejunwei@bluestone.com';
        $data['password'] = sha1('123456');
        $data['created'] = date('Y-m-d H:d:s', time());
        $data['posts'] = [
            ['title' => 'title', 'content' => 'content'],
        ];
        if ($user->relation(true)->add($data)) {
            echo 'success';
        } else {
            dump($user->getError());
        }
    }

    public function delete($id)
    {
        $user = D('User');
        $user->relation('posts')->delete($id);
    }

}