<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <br><br>
        <div class="container-fluid">
            <div class="list-group">
                <a href="/users/{$user.id}" class="list-group-item">个人设置</a>
                <a href="/users/{$user.id}/avatar" class="list-group-item active">头像设置</a>
                <a class="list-group-item">Morbi leo risus</a>
                <a class="list-group-item">Porta ac consectetur ac</a>
                <a class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <br><br>
        <div class="container-fluid">
            <form action="/users/{$user.id}/avatar" enctype="multipart/form-data" method="post">
                <i class="fa fa-file-photo-o" aria-hidden="true"></i> 头像：</label>
                <div class="form-group">
                    <img src="{$user.avatar}" alt="avatar" class="img-responsive">
                </div>
                <div class="form-group">
                    <label for="avatar">上传新头像</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary pull-right">
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>