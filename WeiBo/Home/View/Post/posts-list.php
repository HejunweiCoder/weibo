<foreach name="posts" key="k" item="post">
    <div class="media">
        <a href="#" class="media-left">
            <img width="100" height="120" src="{$post.user.avatar}" alt="avatar">
        </a>
        <div class="media-body">
            <h4 class="media-heading" style="font-weight: bold">{$post.user.username}</h4>
            {$post.content}
            <notempty name="post.image_path">
                <div class="row">
                    <div class="col-md-6 img">
                        <div class="thumbnail">
                            <img src="{$post.image_path}" alt="thumb">
                        </div>
                    </div>
                    <div class="img-zoom" style="display: none">
                        <img src="{$post.image_path}" alt="image">
                    </div>
                </div>
            </notempty>
            <div class="footer" style="width:80%;">
                <br>
                <span class="text-muted">{$post.created}</span>
                <span class="text-primary pull-right">赞(0) | 转播 | 评论 | 收藏</span>
            </div>
        </div>
        <hr>
    </div>
</foreach>