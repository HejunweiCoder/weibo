
<div class="jumbotron">
    <h1>Hello, world!</h1>
    <p>...</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
<div class="container-fluid">
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>昵称</th>
            <th>邮箱</th>
            <th>姓氏</th>
            <th>名字</th>
            <th>创建时间</th>
            <th>更新时间</th>
            <th>发布的文章</th>
        </tr>
        </thead>
        <tbody>
        <foreach name="users" item="user">
            <tr data-url="/admin/{$user.id}">
                <td>{$user.id}</td>
                <td>{$user.username}</td>
                <td>{$user.email}</td>
                <td>{$user.first_name}</td>
                <td>{$user.last_name}</td>
                <td>{$user.created}</td>
                <td>{$user.updated}</td>
                <td>
                    <foreach name="user.posts" item="post">
                        <div class="title">{$post.title}</div>
                        <div class="content">{$post.content}</div>
                    </foreach>
                </td>
            </tr>
        </foreach>
        </tbody>
    </table>
    <div class="pagination-container text-center">
        <ul class="pagination">
            <?php
            for ($i = 1; $i <= $totalPages; $i++) {
                if ($i == I('get.p')) {
                    echo "<li class='active'><a href='/admin/p/$i'>$i</a></li>";
                } else {
                    echo "<li><a href='/admin/p/$i'>$i</a></li>";
                }
            }
            ?>
        </ul>
    </div>
</div>
