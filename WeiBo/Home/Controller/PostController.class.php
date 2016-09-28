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
        IS_PJAX ?: layout(true);
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
            return false;
        }
    }

    public function index()
    {
        $firstRow = 0;
        if (!empty(I('get.page'))) {
            $firstRow = (I('get.page') - 1) * 10;
        }
        $posts = D('Post')->relation(true)->order('created desc')->limit($firstRow, 10)->select();
        $this->assign('posts', $posts);
        $status = count($posts) > 0 ? true : false;
        if (IS_AJAX) {
            layout(false);
            $this->ajaxReturn(['data' => $this->fetch('posts-list'), 'status' => $status]);
        }
        $this->display('index');
    }

    public function store()
    {
        $user = D('User')->where('username = "' . cookie('auth')['username'] . '"')->relation(true)->find();
        $filePath = $this->upload();
        if ($filePath) {
            $data['image_path'] = $filePath;
        }
        $data['user_id'] = $user['id'];
        $data['content'] = $_POST['post'];
        $post = D('Post');
//        $this->upload();
        if ($post->create($data)) {
            $post->add();
//            $this->assign('post',$post);
            return redirect('/posts');
        } else {
            $this->ajaxReturn($post->getError());
        }
    }

//    public function show($id)
//    {
//        echo $id;
//        if (IS_PJAX) {
//            $this->display('show');
//        } else {
//            layout(true);
//            $this->display('show');
//        }
//    }

    public function create()
    {
        //
    }
}