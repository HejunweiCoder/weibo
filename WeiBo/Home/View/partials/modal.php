<div class="modal fade" id="login_modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:20px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4> 登录</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" action="/login" method="post" id="login_form" novalidate>
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
                    <div class="form-group pull-left">
                        <label for="verify"><i class="fa fa-lock" aria-hidden="true"></i> 验证码</label>
                        <input type="text" name="verify"
                               required
                               data-msg-required="请填写验证码"
                               class="form-control" placeholder="Enter code">
                    </div>
                    <img class="pull-right" src="/code" onclick="javascript:this.src='/code'" alt="验证码"
                         style="cursor:pointer">
                    <button type="submit" class="btn btn-success btn-block"><span
                            class="glyphicon glyphicon-off"></span> 登录
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> 取消
                </button>
                <p>还没有账号 <a href="javascript:void(0);" data-toggle="modal" data-target="#register_modal" id="register">立即注册</a>
                </p>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="register_modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">
            <div class="modal-header" style="padding:20px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> 注册</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;overflow: auto">
                <form role="form" method="post" action="/register" id="register_form" novalidate>
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
                               class="form-control" id="register_email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password-register"><span class="glyphicon glyphicon-eye-open"></span> 密码</label>
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


