<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>
        <block name="title"></block>
        ThinkPHP
    </title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sweetalert.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
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
<nav class="nav navbar-default navbar-fixed-top" role="navigation" style="padding:0 20px 0 0;">
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
                <empty name="auth">
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login-modal" id="login">登录</a>
                    </li>
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#register-modal">注册</a></li>
                    <else/>
                    <li class="dropdown"><a href="#" data-toggle="dropdown">{$auth.username} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/logout"><i class="fa fa-btn fa-sign-out"></i>退出
                                </a>
                            </li>
                        </ul>
                    </li>
                </empty>
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
                               class="form-control" id="username"
                               placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> 密码</label>
                        <input type="password" name="password" required
                               data-rule-minlength="6"
                               data-rule-maxlength="40"
                               data-msg-required="请填写密码"
                               class="form-control" id="password-login" placeholder="Enter password">
                        <p class="pull-right">忘记密码? <a href="#">找回密码</a></p>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" checked>记住密码</label>
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
                        <input type="text" name="username"
                               required
                               data-rule-minlength="2"
                               data-rule-maxlength="20"
                               data-msg-required="请填写用户名"
                               class="form-control" id="username" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email"><span class="glyphicon glyphicon-send"></span> email</label>
                        <input type="email" name="email" required
                               data-rule-maxlength="40"
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

<div class="container">
    <div class="nav-top-push"></div>
    <block name="content"></block>
</div>

</body>
</html>