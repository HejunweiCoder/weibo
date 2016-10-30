<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <br><br>
        <div class="container-fluid">
            <div class="list-group">
                <a href="/users/{$user.id}" class="list-group-item active">个人设置</a>
                <a href="/users/{$user.id}/avatar" class="list-group-item">头像设置</a>
                <a class="list-group-item">Morbi leo risus</a>
                <a class="list-group-item">Porta ac consectetur ac</a>
                <a class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <br><br>
        <div class="container-fluid">
            <form action="/users/{$user.id}" id="user_form" method="post" novalidate>
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value="{$user.id}">
                <div class="form-group">
                    <label for="username"><i class="fa fa-user" aria-hidden="true"></i> 用户名：</label>
                    <input type="text" readonly value="{$user.username}" class="form-control" id="username">
                </div>

                <div class="form-group">
                    <label><i class="fa fa-angle-double-right"></i> 性别：</label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="1"
                        <if condition="$user.gender eq 1">
                            checked
                        </if>
                        > <i class="fa fa-venus"></i>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="0"
                        <if condition="$user.gender eq 0">
                            checked
                        </if>
                        > <i class="fa fa-mars"></i>
                    </label>
                </div>
                <div class="form-group">
                    <label for="email"><i class="glyphicon glyphicon-send" aria-hidden="true"></i> 邮箱：</label>
                    <input type="email" required id="email" name="email" value="{$user.email}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="introduction"><i class="glyphicon glyphicon-tag" aria-hidden="true"></i> 简介：</label>
                    <textarea id="introduction" name="introduction" class="form-control">{$user.introduction}
                        </textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary pull-right">
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
