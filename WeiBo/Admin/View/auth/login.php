<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>后台登录</title>

    <!-- Bootstrap -->
    <link href="/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin/app.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/vendor/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/vendor/js/bootstrap.min.js"></script>
    <script src="/vendor/js/jquery.validate.min.js"></script>
    <script src="/vendor/js/messages_zh.min.js"></script>

</head>
<body>
<nav class="nav navbar-default" id="app-navbar-collapse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapse" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">ThinkPHP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/login">登录</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        <h3 class="form-header page-header text-center">
            <span class="glyphicon glyphicon-user"></span> 用户登录
        </h3>
        <form action="/admin/login" method="post" class="form" id="login_form" novalidate>
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
                       data-rule-minlength="4"
                       data-rule-maxlength="40"
                       data-msg-required="请填写密码"
                       class="form-control" id="login_password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" checked>记住我
                    </label>
                    <div class="pull-right error">
                        <?php echo session('error');session('error',null);?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                    <button class="btn btn-primary btn-block">登 录</button>
            </div>
            <p>
                <a href="/password/reset">忘记密码?</a>
            </p>
        </form>
    </div>
</div>
<script>
    $(function () {
        var options = {
            ignore: ".ignore",
            highlight: function (el) {
                $(el).closest('.form-group').addClass('has-error');
                $(el).closest('.form-group').find('.help-block').addClass('hidden');
                // remove the error message from the server
                // $(el).parent().find('i').html('&nbsp;').removeClass('fa fa-check');
            },
            unhighlight: function (el) {
                $(el).closest('.form-group').removeClass('has-error');
                // remove the error message from the server
                $(el).closest('.form-group').find('.help-block').addClass('hidden');
                // $(el).parent().find('i').html('&nbsp;').addClass('fa fa-check');
            },
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        };

        $('#login_form').validate(options);
    });
</script>
</body>
</html>