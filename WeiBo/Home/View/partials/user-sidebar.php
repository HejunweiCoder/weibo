<div class="col-md-1"></div>
<div class="col-md-3">
    <br><br>
    <div class="container-fluid">
        <div class="list-group">
            <a href="/users/{$user.id}/edit" class="list-group-item">个人设置</a>
            <a href="/users/{$user.id}/avatar" class="list-group-item">头像设置</a>
            <a class="list-group-item">Morbi leo risus</a>
            <a class="list-group-item">Porta ac consectetur ac</a>
            <a class="list-group-item">Vestibulum at eros</a>
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