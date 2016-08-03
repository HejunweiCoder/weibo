<extend name="./app"/>
<block name="content">

    <div class="container">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <h3 class="form-header page-header text-center">
                <span class="glyphicon glyphicon-file"></span> 上传文件
            </h3>
            <form action="/user/upload" method="post" enctype="multipart/form-data" class="form">
                <div class="form-group">
                    <input name="file[]" type="file" class="form-control" placeholder="用户名">
                </div>
                <div class="form-group">
                    <input name="file[]" type="file" class="form-control" placeholder="用户名">
                </div>
                <div class="form-group">
                    <input name="file[]" type="file" class="form-control" placeholder="用户名">
                </div>
<!--                <div class="form-group">-->
<!--                    <input name="password" type="password" class="form-control" placeholder="密码">-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <div class="checkbox">-->
<!--                        <label>-->
<!--                            <input type="checkbox" name="remember" checked>记住我-->
<!--                        </label>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group">
                    <button class="btn btn-primary" style="width:100%">上 传</button>
                </div>
                <p>
                    <a href="/password/reset">忘记密码?</a>
                </p>
            </form>
        </div>
    </div>
</block>