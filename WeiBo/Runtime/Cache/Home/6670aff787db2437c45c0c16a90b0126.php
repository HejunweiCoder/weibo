<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="nav navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapse" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/home/user">ThinkPHP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">登录</a></li>
                <li><a href="/register">注册</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        <h3 class="form-header page-header text-center">
            <span class="glyphicon glyphicon-user"></span> 用户登录
        </h3>
        <form action="/login" method="post" class="form">
            <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="用户名">
            </div>
            <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="密码">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" checked>记住我
                    </label>
                </div>
            </div>
            <div class="form-group">
                    <button class="btn btn-primary" style="width:100%">登 录</button>
            </div>
            <p>
                <a href="/password/reset">忘记密码?</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>