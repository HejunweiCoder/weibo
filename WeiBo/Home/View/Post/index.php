<link href="/css/front/post.css" rel="stylesheet">
<div id="main" style="overflow: hidden">
    <div class="main-container-left col-lg-9">
        <div class="post-title">
            <span class="pull-right">还可以输入<strong id="number">280</strong>个字</span>
        </div>
        <label for="post" class="post-title">
            <span>和大家分享一点新鲜事吧?</span>
        </label>

        <form action="/posts" data-pjax method="post" enctype="multipart/form-data" class="form" id="post_form"
              novalidate
              style="margin-bottom: 70px">
            <div class="form-group">
                <div contenteditable="true" id="post" class="form-control"
                     required
                     data-rule-maxlength="280"
                     data-rule-minlength="8"
                ></div>
                <input type="hidden" name="post" id="post_content">
            </div>
            <div class="form-group" style="margin:35px 0 0 0;">
                <label for="file">上传配图
                    <input type="file" name="file" id="file" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <input type="submit" id="btn_submit" class="btn btn-default btn-lg pull-right" value="发表">
            </div>
        </form>

        <ul class="nav nav-tabs" role="tab-list">
            <li class="active" role="presentation"><a href="#following" data-toggle="tab">我关注的 <span
                        class="caret"></span></a></li>
            <li role="presentation"><a href="#listeners" data-toggle="tab">互听得</a></li>
        </ul>
        <div class="tab-content">
            <br>
            <div class="tab-pane active" id="following">
                <foreach name="posts" key="k" item="post">
                    <div class="media">
                        <a data-pjax href="/users/{$post.user.id}" class="media-left">
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
                            <div class="footer" style="width:80%">
                                <br>
                                <span class="text-muted">{$post.created}</span>
                                <span class="text-primary pull-right">赞(0) | 转播 | 评论 | 收藏</span>
                            </div>
                        </div>
                        <hr>
                    </div>
                </foreach>
            </div>
            <div class="footer text-center">
                <p id="load_more" data-page="1" class="text-primary">加载更多...</p>
            </div>
            <div class="tab-pane" id="listeners">
                listen
            </div>
        </div>
    </div>
    <div class="col-lg-3 text-center">
        <br><br>
        <div>
            <img width="200" src="{$auth.avatar}" alt="avatar">
        </div>
        <div><a data-pjax href="/users/{$auth.id}"><h3 class="text-primary">{$auth.username}</h3></a></div>
        <div><h5 class="text-muted">{$auth.introduction}</h5></div>
    </div>
</div>
<script src="/vendor/js/jquery.scrollUp.js"></script>
<script>
    $(function () {
        initPost();
        loadMore();
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    })
</script>
