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
    <div class="nav-top-push"></div>
    Go to <a href="/user/2" data-pjax data-container="#pjax-container" data-url="/user/2">next page</a>.
    <block name="content"></block>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#loading').hide(); //隐藏loading
    });
    $(document).pjax('a', '#pjax-container'); //内容替换的容器
    $(document).on('pjax:send', function() {
        $('#loading').show(); //显示loading
    });
    $(document).on('pjax:complete', function() {
        $('#loading').fadeOut(1000); //隐藏loading效果
    });
</script>

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
