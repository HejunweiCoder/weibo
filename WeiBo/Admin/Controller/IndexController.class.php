<?php

namespace Admin\Controller;

use Think\Page;
use Common\Controller\AuthController;
use Think\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if(session('admin')){
            $this->assign('auth', session('admin'));
        }else{
            $this->redirect('/admin/login');
        }
    }

    public function index()
    {
//        redirect('https://www.baidu.com',5,'页面跳转中');
        $users = D('User');
        $page = new Page($users->count(),10);
        $page->lastSuffix = false;//最后一页不显示为总页数
        $this->assign('users', $users->limit($page->firstRow,$page->listRows)->relation(true)->select());
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
//        if (array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX']) {
//            $this->display('','','','','pjax/'); //浏览器支持Pjax功能，直接渲染输出页面。Bug fix: 兼容非调试模式
//        } else {
//            layout(true); //开启模板
//            $this->display('show'); //浏览器不支持Pjax功能或F5刷新页面，使用默认的链接响应机制（加载模板）
//        }
        $this->display('show');
    }

    public function upload()
    {
        $upload = new Upload();
        $upload->maxSize = 410960;
        $upload->exts= ['jpg','png','jpeg','gif'];
        $upload->savePath = './';
        $upload->subName = ['date' ,'Ymd'];
        $info = $upload->upload();
        if($info){
            $this->success('upload success');
        }else{
            $this->error($upload->getError());
        }

//        $user = new Model('user');
//        $map['id'] = 1;
//        $map['id'] = ['between','1,3'];
//        $map['id'] = ['not between','2,3'];
//        $map['id|user'] = '1';
//        $map['id'] = ['in','1,3'];
//        $map['id'] = ['not in','1,3'];
//        $map['user'] = ['like','hejunwei'];
//        $map['user'] = ['notlike','hejunwei'];
//        $map['user'] = ['like',['hejunwei','1'],'AND'];
//        $map['_logic'] = 'OR';
//        $map = new \stdClass();
//        $map->id = 1;
//        $map->user = 'hejunwei';
//        $map->_logic = 'OR';
//        dump($user->where('id>0')->order('id ASC')->limit(1)->select());

        //这两个方法都是在调用UserModel
//        $user = new UserModel();
        //这两个方法是等价的
//        D('user');
//        dump(D('User')->getDbfields());
    }

    public function store()
    {
        $user = D('User');
        $data['username'] = 'hejunwei';
        $data['email'] = 'hejunwei@bluestone.com';
        $data['password'] = sha1('123456');
        $data['created'] = date('Y-m-d H:d:s', time());
        $data['posts'] = [
            ['title'=>'title','content'=>'content'],
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