<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>
        
        ThinkPHP
    </title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sweetalert.css" rel="stylesheet">
    <link href="/css/layouts/app.css" rel="stylesheet">

    <script src="/js/jquery.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/additional-methods.min.js"></script>
    <script src="/js/messages_zh.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</head>
<body>
<nav class="nav navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/home/user" style="margin-left: 15px;margin-right: 60px;font-size: large">ThinkPHP</a></li>
                <li class="active"><a href="/">首页</a></li>
                <li><a href="#">文章</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">精彩内容 <span class="caret"></span></a>
                    <ul class="bs-menu dropdown-menu">
                        <li><a href="#">PHP</a></li>
                        <li class="divider"></li>
                        <li><a href="#">ThinkPHP</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Laravel</a></li>
                        <li class="divider"></li>
                        <li><a href="#">C++</a></li>
                        <li class="divider"></li>
                        <li><a href="#">JAVA</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(empty($auth)): ?><li><a href="javascript:void(0);" data-toggle="modal" data-target="#loginModal" id="login">登录</a>
                    </li>
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#registerModal">注册</a></li>
                    <?php else: ?>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"><?php echo ($auth["username"]); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/logout"><i class="fa fa-btn fa-sign-out"></i>退出
                                </a>
                            </li>
                        </ul>
                    </li><?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> 登录</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" action="/login" method="post" novalidate>
                    <div class="form-group">
                        <label for="username"><span class="glyphicon glyphicon-user"></span> 用户名</label>
                        <input type="text" name="username" required class="form-control" id="username"
                               placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password"><span class="glyphicon glyphicon-eye-open"></span> 密码</label>
                        <input type="text" name="password" required class="form-control" id="password" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>记住密码</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span
                            class="glyphicon glyphicon-off"></span> 登录
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> 取消
                </button>
                <p>还没有账号 <a href="javascript:void(0);" data-toggle="modal" data-target="#registerModal" id="register">立即注册</a>
                </p>
                <p>忘记密码? <a href="#">找回密码</a></p>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> 注册</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> 用户名</label>
                        <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> 密码</label>
                        <input type="text" class="form-control" id="psw" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> 确认密码</label>
                        <input type="text" class="form-control" id="psw" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span
                            class="glyphicon glyphicon-off"></span> 注册
                    </button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>

<div class="main">
    <div class="nav-top-push"></div>
    

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>昵称</th>
                <th>邮箱</th>
                <th>姓氏</th>
                <th>名字</th>
                <th>创建时间</th>
                <th>更新时间</th>
                <th>发布的文章</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($users)): foreach($users as $key=>$user): ?><tr>
                    <td><?php echo ($user["id"]); ?></td>
                    <td><?php echo ($user["username"]); ?></td>
                    <td><?php echo ($user["email"]); ?></td>
                    <td><?php echo ($user["first_name"]); ?></td>
                    <td><?php echo ($user["last_name"]); ?></td>
                    <td><?php echo ($user["created"]); ?></td>
                    <td><?php echo ($user["updated"]); ?></td>
                    <td>
                        <?php if(is_array($user["posts"])): foreach($user["posts"] as $key=>$post): ?><div class="title"><?php echo ($post["title"]); ?></div>
                            <div class="content"><?php echo ($post["content"]); ?></div><?php endforeach; endif; ?>
                    </td>
                </tr><?php endforeach; endif; ?>
            </tbody>
        </table>
        <div class="pagination-container text-center">
            <ul class="pagination">
                <?php
 for ($i = 1; $i <= $totalPages; $i++) { if ($i == I('get.p')) { echo "<li class='active'><a href='/user/p/$i'>$i</a></li>"; } else { echo "<li><a href='/user/p/$i'>$i</a></li>"; } } ?>
            </ul>
        </div>
    </div>



    <?php if($user == 'hejunwei'): ?><div class="text-center">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div><?php endif; ?>

    <script>
        $(function () {
//            $pageContain = $("#pagination").children();
//            $pageContain.remove();
//            $newNode = $pageContain.children().text(function (i,oldText) {
//                return '<li>'+oldText+'</li>';
//            });
//            console.log($newNode);

        });
    </script>

</div>

</body>
</html>