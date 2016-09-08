<?php

namespace Home\Controller;

use Think\Controller;
use Think\Image;
use Think\Verify;
use Think\Upload;

class PostController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if (cookie('auth')) {
            $this->assign('auth', cookie('auth'));
        }
    }

    public function _empty()
    {
        $this->display('errors:404');
    }

    public function upload()
    {
        $upload = new Upload();
        $upload->maxSize = 410960;
        $upload->exts = ['jpg', 'png', 'jpeg', 'gif'];
        $upload->subName = ['date', 'Ymd'];
        $info = $upload->upload(I('post.file'));
        if ($info) {
            return '/uploads/' . $info['file']['savepath'] . $info['file']['savename'];
        } else {
            return $this->error('文件上传失败');
        }
    }

    public function index()
    {
        $img = new Image();
        $img->open('./images/1.jpg');
        $param['width'] = $img->width();
        $param['height'] = $img->height();
        $param['type'] = $img->type();
        $param['mime'] = $img->mime();
        $param['size'] = $img->size();
//        dump($param);
//        $img->crop('0','0',($param['width']-400)/2,($param['height']-400)/2,400,400)->save('./images/3.jpg');
//        $img->thumb('300','300')->save('./images/3.jpg');
//        $img->water('./images/vip-icon.png')->save('./images/3.jpg');
//        $img->text('majialichen.com','./fonts/consola.ttf',20,'#cccccc',Image::IMAGE_WATER_NORTHWEST)->save('./images/3.jpg');

//        dump($_COOKIE);

        if (IS_PJAX) {
            $this->display('index');
        } else {
            layout(true);
            $this->display('index');
        }

    }

    public function store()
    {
        $user = D('User')->where('username = "' . cookie('auth')['username'] . '"')->relation(true)->find();
        $filePath = $this->upload();
        $data = [
            'user_id'   => $user['id'],
            'content'   => $_POST['post'],
            'file_path' => $filePath
        ];
        $post = D('Post');
//        $this->upload();
        if ($post->create($data)) {
            $post->add();
            $this->assign('post',$post);
            $this->display('show');
        } else {
            $this->ajaxReturn($user->getError());
        }
    }

    public function show()
    {
        if (IS_PJAX) {
            $this->display('create');
        } else {
            layout(true);
            $this->display('create');
        }
    }

    public function create()
    {
        if (IS_PJAX) {
            $this->display('create');
        } else {
            layout(true);
            $this->display('create');
        }
    }
}