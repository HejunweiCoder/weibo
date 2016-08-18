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
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/sweetalert.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/layouts/app.css" rel="stylesheet">

    <script src="/js/jquery.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.pjax.js"></script>
    <script src="/js/additional-methods.min.js"></script>
    <script src="/js/messages_zh.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</head>
<body>

<include file="partials/navbar" />

<include file="partials/modal" />

<div class="container-fluid" style="padding-left: 0;padding-right: 0" id="pjax-container">
    <block name="content"></block>
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

</script>

</body>
</html>
