<nav class="nav navbar-inverse navbar-fixed-top" id="navbar" role="navigation" style="padding:0 20px 0 0;opacity: 0.95">
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
                <li><a href="/" data-pjax style="margin-left: 15px;margin-right: 60px;font-size: large">ThinkPHP</a></li>
                <li class="active"><a href="/" data-pjax>首页</a></li>
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
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login_modal" id="login">登录</a>
                    </li>
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#register_modal">注册</a></li>
                <else/>
                    <li><a href="/posts" data-pjax>微博动态</a></li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown">{$auth.username} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">@提到我的</a></li>
                            <li><a href="#">收到的评论</a></li>
                            <li><a href="#">发出的评论</a></li>
                            <li><a href="#">我的私信</a></li>
                            <li><a data-pjax href="/users/{$auth.id}/edit">个人设置</a></li>
                            <li><a href="#">系统消息</a></li>
                            <li><a href="#">发私信</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="/logout"><i class="fa fa-btn fa-sign-out"></i>退出</a>
                            </li>
                        </ul>
                    </li>
                </empty>
            </ul>
        </div>
    </div>
</nav>