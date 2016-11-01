<div class="col-md-1"></div>
<div class="col-md-3">
    <br><br>
    <div class="container-fluid">
        <div class="list-group">
            <a data-pjax href="/users/{$user.id}/edit" class="list-group-item">个人设置</a>
            <a data-pjax href="/users/{$user.id}/avatar" class="list-group-item">头像设置</a>
            <a class="list-group-item">Morbi leo risus</a>
        </div>
    </div>
</div>

<script>
    $(".list-group-item").each(function () {
        if (location.href == this.href) {
            $(this).addClass('active');
        }
    });
</script>