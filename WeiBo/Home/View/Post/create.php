<link href="/css/front/post.css" rel="stylesheet">
<div id="main">
    <div class="main-container-left col-lg-8">
        <div class="post-title">
            <span class="pull-right">还可以输入<strong id="number">280</strong>个字</span>
        </div>
        <label for="post" class="post-title">
            <span>和大家分享一点新鲜事吧?</span>
        </label>
        <form action="/posts" data-pjax method="post" enctype="multipart/form-data" class="form" id="post_form" novalidate>
            <div class="form-group">
                <div contenteditable="true" id="post" class="form-control"
                     required
                     data-rule-maxlength="280"
                     data-rule-minlength="8"
                ></div>
                <input type="hidden" name="post" id="post_content">
            </div>
            <div class="form-group" style="margin-top: 40px">
                <label>
                    <input type="file" name="file" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <input type="submit" id="btn_submit" class="btn btn-default btn-lg pull-right" value="发表">
            </div>
        </form>
    </div>
    <div class="main-container-right col-lg-4">
        container-right
    </div>
</div>

<script>
    $(function () {
        initPost();
    })
</script>