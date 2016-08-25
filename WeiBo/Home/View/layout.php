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

    <link rel="icon" type="image/png" href="favicon.png">

    <!-- Bootstrap -->
    <link href="/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/vendor/css/sweetalert.css" rel="stylesheet">
    <link href="/vendor/css/font-awesome.min.css" rel="stylesheet">
    <link href="/vendor/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/vendor/css/jquery.emoji.css" rel="stylesheet">
    <link href="/css/front/app.css" rel="stylesheet">

    <script src="/vendor/js/jquery.min.js"></script>
    <script src="/vendor/js/bootstrap.min.js"></script>
    <script src="/vendor/js/sweetalert.min.js"></script>
    <script src="/vendor/js/jquery.validate.min.js"></script>
    <script src="/vendor/js/jquery.pjax.min.js"></script>
    <script src="/vendor/js/jquery-ui.min.js"></script>
    <script src="/vendor/js/additional-methods.min.js"></script>
    <script src="/vendor/js/messages_zh.min.js"></script>
    <script src="/vendor/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="/vendor/js/jquery.mousewheel-3.0.6.min.js"></script>
    <script src="/vendor/js/jquery.emoji.min.js"></script>
    <script src="/js/front/app.js"></script>
</head>
<body>

<include file="partials/navbar"/>

<include file="partials/modal"/>

<div class="container-fluid" id="main_container">
    {__CONTENT__}
</div>

<include file="partials/footer"/>

<script>
    $(function () {
        initApp();

        $('#register_email').on('keyup', function () {
            emailAutoComplete();
        });

    });
</script>

</body>
</html>
