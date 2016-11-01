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

    private function upload()
    {
        $upload = new Upload(['rootPath' => UPLOAD_PATH]);//可以配置其他参数
        $upload->maxSize = 410960;//也可以这样配置
        $upload->exts = ['jpg', 'png', 'jpeg', 'gif'];
        $upload->subName = ['date', 'Ymd'];
        $info = $upload->upload(I('post.avatar'));//使用I方法拿到文件
        if ($info) {
            return '/' . UPLOAD_PATH . $info['avatar']['savepath'] . $info['avatar']['savename'];//向数据库返回
        } else {
            return false;
        }
    }

    /**
     * @return array
     */
    public function avatar($id)
    {
        $user = D('User');
        $auth = $user->where("id=$id")->find() ?: alert_back('非法访问');
        $auth['id'] === cookie('auth')['id'] ?: alert_back('非法访问');
        if (IS_GET) {
            $this->assign('user', $auth);
            return $this->display('avatar');
        }
        if (IS_POST) {
            $avatar = $this->upload() ?: alert_back('上传失败');
            $user->avatar = $avatar;
            if ($user->where("id=$id")->save() === 1) {
                cookie('auth',$user);
                return $this->success('修改成功');
            } else {
                alert_back('修改失败');
            }
        }
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
        return $this->display('show');
    }

    public function store()
    {
        $user = D('User');
        if (IS_PUT) {
            $user->gender = I('post.gender');
            $user->email = I('post.email');
            $user->introduction = I('post.introduction');
            if ($user->where('id=' . I('post.id'))->save() === 1) {
                return $this->success('修改成功');
            }
            return redirect('/users/' . I('post.id'));
        } else {
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

    }

    public function delete($id)
    {
        $user = D('User');
        $user->relation('posts')->delete($id);
    }

}