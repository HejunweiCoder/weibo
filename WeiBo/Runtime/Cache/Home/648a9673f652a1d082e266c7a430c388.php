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
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/sweetalert.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/layouts/app.css" rel="stylesheet">

    <script src="/js/jquery.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/additional-methods.min.js"></script>
    <script src="/js/messages_zh.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</head>
<body>
<nav class="nav navbar-inverse navbar-fixed-top" role="navigation" style="padding:0 20px 0 0;">
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
                <li><a href="/home/post">文章</a></li>
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
                <?php if(empty($auth)): ?><li><a href="javascript:void(0);" data-toggle="modal" data-target="#login-modal" id="login">登录</a>
                    </li>
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#register-modal">注册</a></li>
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
<div class="modal fade" id="login-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:20px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4> 登录</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" action="/login" method="post" id="login-form" novalidate>
                    <div class="form-group">
                        <label for="username"><i class="fa fa-user" aria-hidden="true"></i> 用户名</label>
                        <input type="text" name="username"
                               required
                               data-rule-minlength="2"
                               data-rule-maxlength="20"
                               data-msg-required="请填写用户名"
                               class="form-control" id="login-username"
                               placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> 密码</label>
                        <input type="password" name="password" required
                               data-rule-minlength="6"
                               data-rule-maxlength="40"
                               data-msg-required="请填写密码"
                               class="form-control" id="login-password" placeholder="Enter password">
                        <p class="pull-right">忘记密码? <a href="#">找回密码</a></p>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" checked>记住密码</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="verify"><i class="fa fa-lock" aria-hidden="true"></i> 验证码</label>
                        <input type="text" name="verify"
                               required
                               data-msg-required="请填写验证码"
                               class="form-control" id="login-password" placeholder="Enter password">
                    </div>
                    <img src="/code" onclick="javascript:this.src='/code'" alt="验证码" style="cursor:pointer">
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
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="register-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:20px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> 注册</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" method="post" action="/register" id="register-form" novalidate>
                    <div class="form-group">
                        <label for="username"><i class="fa fa-user" aria-hidden="true"></i> 用户名</label>
                        <i id="username-status"></i>
                        <input type="text" name="username"
                               required
                               data-rule-minlength="2"
                               data-rule-maxlength="20"
                               data-msg-required="请填写用户名"
                               data-msg-remote="用户名重复"
                               class="form-control" id="register-username" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email"><span class="glyphicon glyphicon-send"></span> email</label>
                        <i id="email-status"></i>
                        <input type="email" name="email"
                               required
                               data-rule-maxlength="40"
                               data-msg-remote="邮箱重复"
                               class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> 密码</label>
                        <input type="password" name="password" required
                               data-rule-minlength="6"
                               data-rule-maxlength="40"
                               class="form-control" id="password-register" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> 确认密码</label>
                        <input type="password" name="confirm_password" required
                               data-rule-minlength="6"
                               data-rule-maxlength="40"
                               data-rule-equalTo="#password-register"
                               class="form-control" id="confirm-password" placeholder="Enter password confirm">
                    </div>
                    <button type="submit" class="btn btn-success btn-block" style="margin-top: 40px;"><span
                        class="glyphicon glyphicon-off"></span> 注册
                    </button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>

<div class="container-fluid" style="padding-left: 0;padding-right: 0">
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

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Hejunwei</h2>
                <p class="footer__site-description" >
                    <strong>为Laravel艺术家而生</strong>，我的愿景是做最好的<a target="_blank" href="http://laravel.com/">Laravel</a>中文资料库：在这里你可以找到最干货Laravel视频教程
                    ，有任何跟<a target="_blank" href="http://laravel.com/">Laravel</a>相关的问题，都可以在这里得到解决。<strong>Happy Hacking !</strong>
                </p>
                <ul class="nav nav-pills">
                    <li class="github"><a target="_blank" href="https://github.com/HejunweiCoder"><i class="fa fa-github"></i></a></li>
                    <li class="weibo"><a target="_blank" href="#"><i class=" fa fa-weibo"></i></a></li>
                    <li class="weixin"><a href="#"><i class="fa fa-weixin"></i></a></li>
                    <div class="ui flowing popup bottom left transition hidden">
                        <div class="ui one column relaxed divided grid">
                            <div class="column">
                                <img src="/images/wechat.jpg" alt="" width="120">
                            </div>
                        </div>
                    </div>
                    <li class="weixin qq" ><a href="#"><i class="fa fa-qq"></i></a></li>
                    <div class="ui flowing popup bottom left transition hidden">
                        <div class="ui one column relaxed divided grid">
                            <div class="column">
                                <img src="/images/qq-group-2.jpg?version=2" alt="" width="120">
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="container-right">
                <div class="col-md-2 not-mobile not-pad" style="margin-left: 100px">
                    <h4>学习资料</h4>
                    <ul class="nav">
                        <li><a target="_blank" href="http://laravel.so/">Laravel Tips</a></li>
                        <li><a target="_blank" href="https://laracasts.com/discuss">Laracasts</a></li>
                        <li><a target="_blank" href="https://jellybool.com">个人博客</a></li>
                        <li><a href="/recommended-reading">推荐书目</a></li>
                    </ul>
                </div>
                <div class="col-md-2 not-mobile not-pad">
                    <h4>Laravel讨论</h4>
                    <ul class="nav">
                        <li><a href="/articles">文章教程</a></li>
                        <li><a href="/copyright" target="_blank">版权声明</a></li>
                        <li><a href="https://easywechat.org/" target="_blank">EasyWechat</a></li>
                        <li><a  href="/special-thanks">特别鸣谢</a></li>

                    </ul>
                </div>
                <div class="col-md-2 not-mobile not-pad">
                    <h4>友情相关</h4>
                    <div class="row">
                        <div class="col-md-10">
                            <ul class="nav">
                                <li><a target="_blank" href="http://laravel.com/">Laravel官网</a></li>
                                <li><a target="_blank" href="/link">友情链接</a></li>
                                <li><a href="https://github.com/laravist" target="_blank">Laravist On Github</a></li>
                                <li><a href="/feed">RSS订阅</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="footer-bottom">
            <p class="pull-left not-mobile not-pad">
                Developed By <a href="https://9thnet.com" target="_blank">Hejunwei</a>,Powered By <a target="_blank" href="http://thinkphp.cn">ThinkPHP</a>
            </p>
            <div class="pull-right not-mobile not-pad">
                运行于  <a target="_blank" href="http://www.aliyun.com/">阿里云</a> 的 <a target="_blank" href="http://www.aliyun.com/product/ecs/?spm=5176.383338.1906226.1.ZDIJ6G">ECS</a>云服务器.
            </div>
            <p class="text-center">
                © Weibo 2016. All rights reserved. <a  href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">蜀ICP备15005290号-5</a>
            </p>
        </div>
    </div>

</footer>

<script>

    $(function () {
        initApp();
    });

    $("#email").autocomplete({
        delay: 0, //默认为300 毫秒，延迟显示设置。
        autoFocus:true, //设置为true 时，第一个项目会自动被选定。
        source: function (request, response) {

            var hosts = ["qq.com", "163.com", "263.com", "sina.com.cn", "gmail.com", "hotmail.com"];//邮箱域名集合

            var term = request.term; //获取用户输入的内容；
            var name = term;  //邮箱的用户名
            var host = "";   //邮箱的域名 例如qq.com
            var ix = term.indexOf('@'); //@的位置

            var result = []; //最终呈现的邮箱列表


            //当用户输入的数据（email）里存在@的时候，就重新给用户名和域名赋值

            if (ix > -1) { //如果@符号存在，就表示用户已经输入用户名了。
                name = term.slice(0, ix);
                host = term.slice(ix + 1);
            }

            if (name) { //如果name有值 即：不为空

                var getHosts = ['qq.com','163.com']; //根据用户名填写的域名我们在hosts里面找到对应的域名集合

                getHosts=  host ? ($.grep(hosts, function (val) { return val.indexOf(host) > -1 })) : hosts;

                result = $.map(getHosts, function (val) { //这个val就是getHosts里的每个域名元素。
                    return name + "@" + val;
                });
            }
            result.unshift(term); // unshift方法的作用是：将一个或多个新元素添加到数组开始，数组中的元素自动后移，返回数组新长度

            response(result);

        }
    });
</script>

</body>
</html>