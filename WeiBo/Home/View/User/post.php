<link href="/css/front/post.css" rel="stylesheet">
<div style="height: 50px;"></div>
<div id="main">
    <div class="main-container-left col-lg-8">
        <div class="post-title">
            <span class="pull-right">还可以输入<strong id="number">280</strong>个字</span>
        </div>
        <label for="post" class="post-title">
            <span>和大家分享一点新鲜事吧?</span>
        </label>
        <form action="/user/post" method="post" class="form" id="post_form" novalidate>
            <div class="form-group">
                <textarea name="post" id="post" class="form-control"
                          required
                          data-rule-maxlength="280"
                          data-rule-minlength="8"
                ></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default btn-lg pull-right" value="发表">
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
