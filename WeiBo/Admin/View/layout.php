<!DOCTYPE html>
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
    <link href="/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/css/sweetalert.css" rel="stylesheet">
    <link href="/css/admin/app.css" rel="stylesheet">
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

        <div class="collapse navbar-collapse" id="app_navbar">
            <ul class="nav navbar-nav">
                <li><a href="/admin" style="margin-left: 15px;margin-right: 69px;font-size: large">ThinkPHP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" id="name">{$auth.name} <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/admin/logout"><i class="fa fa-btn fa-sign-out"></i>退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>

<div class="site-nav-left-wrap" id="site_nav_left_wrap">

    <div style="height: 50px;"></div>
    <div class="site-nav-left scrollable-container">
        <div class="list-group">
            <a href="/admin" class="list-group-item active"
               data-toggle="tooltip"
               data-placement="right"
               title="仪表盘">
                <i class="fa fa-dashboard"></i>
                <span class="text">仪表盘</span>
                <span class="glyphicon glyphicon-triangle-left"></span>
            </a>
        </div>

        <div class="list-group">
            <a href="javascript:void(0);"
               class="list-group-item list-group-item-header collapsed"
               data-toggle="collapse"
               data-target="#report_sidebar_nav_collapse">
                <span class="text">会员管理</span>
                <i class="fa fa-caret-down" id="caret"></i>
            </a>

            <div class="list-group site-nav-left-container collapse collapsed"
                 id="report_sidebar_nav_collapse">

                <a href="/admin/1/edit" class="list-group-item member"
                   data-toggle="tooltip"
                   data-placement="right">
                    <span class="text">会员列表</span>
                    <span class="glyphicon glyphicon-triangle-left"></span>
                </a>
                <a href="#" class="list-group-item member"
                   data-toggle="tooltip"
                   data-placement="right">
                    <span class="text">修改会员信息</span>
                    <span class="glyphicon glyphicon-triangle-left"></span>
                </a>
            </div>
        </div>

        <div class="list-group">
            <a href="javascript:void(0);"
               class="list-group-item list-group-item-header collapsed"
               data-toggle="collapse"
               data-target="#weibo_sidebar_nav_collapse">
                <span class="text">微博管理</span>
                <i class="fa fa-caret-down" id="caret"></i>
            </a>

            <div class="list-group site-nav-left-container collapse collapsed"
                 id="weibo_sidebar_nav_collapse">

                <a href="/admin/2/show" class="list-group-item weibo"
                   data-toggle="tooltip"
                   data-placement="right">
                    <span class="text">微博列表</span>
                    <span class="glyphicon glyphicon-triangle-left"></span>
                </a>
                <a href="#" class="list-group-item weibo"
                   data-toggle="tooltip"
                   data-placement="right">
                    <span class="text">微博审核</span>
                    <span class="glyphicon glyphicon-triangle-left"></span>
                </a>
            </div>
        </div>

        <div class="btn-toggle-site-nav-left text-center" id="btn_toggle_site_nav_left_wrap_style">
            <span class="glyphicon glyphicon-arrow-left"></span>
            <span class="glyphicon glyphicon-arrow-right"></span>
        </div>

        <div class="fix-push-up" style="height: 120px;"></div>
    </div>
</div>
<div style="height: 50px;"></div>
<div class="main" id="main_container">
    {__CONTENT__}
</div>


<script src="/vendor/js/jquery.min.js"></script>
<script src="/vendor/js/jquery.pjax.min.js"></script>
<script src="/vendor/js/sweetalert.min.js"></script>
<script src="/vendor/js/bootstrap.min.js"></script>
<script src="/vendor/js/topbar.min.js"></script>
<script src="/vendor/js/jquery.validate.min.js"></script>
<script src="/vendor/js/messages_zh.min.js"></script>
<script src="/js/admin/app.js"></script>

</body>
</html>
