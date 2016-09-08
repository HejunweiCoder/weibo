<div class="container">
    <div class="row">
        <div class="col-md-6">
            <ul class="nav nav-tabs" id="mytab">
                <li class="active">
                    <a href="#course" data-toggle="tab">{$Think.lang.course}</a>
                </li>
                <li>
                    <a href="#home" data-toggle="tab">{$Think.lang.home}</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="course">
                    <p><a href="#">在规定的选课时间内改选其他合适的教学班。选的通识课程选课学生将被统一退课！<span class="pull-right">2016-7-1</span></a>
                    </p>
                    <p><a href="#">在规定的选课时间内改选其他合适的教学班。选课结束后，确定停课的通识课程选课学生将被统一退课！</a></p>
                    <p><a href="#">在规定的选课时间内改选其他合适的教学班。选课结束后，确定停课的通识课程选课学生将被统一退课！</a></p>
                </div>
                <div class="tab-pane fade" id="home">
                    <p><a href="#">我的空间</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-ma-12">
            <ul class="breadcrumb">
                <li><a href="#">开发语言</a></li>
                <li><a href="#">web课程</a></li>
                <li><a href="#" class="text-muted">黑客编程</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/1.jpg" alt="图片">
                <div class="caption">
                    <h3><a href="#">{$post.title}</a></h3>
                    <p>{$post.user.username}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/2.jpg" alt="图片">
                <div class="caption">
                    <h3><a href="#">bootstrap</a></h3>
                    <p>共12课时</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/2.jpg" alt="图片">
                <div class="caption">
                    <h3><a href="#">bootstrap</a></h3>
                    <p>共12课时</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/2.jpg" alt="图片">
                <div class="caption">
                    <h3><a href="#">bootstrap</a></h3>
                    <p>共12课时</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/2.jpg" alt="图片">
                <div class="caption">
                    <h3><a href="#">bootstrap</a></h3>
                    <p>共12课时</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-6">
                <div class="thumbnail">
                    <img src="/images/2.jpg" alt="图片">
                    <div class="caption">
                        <h3><a href="#">bootstrap</a></h3>
                        <p>共12课时</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="page-header">
                    <h2>bootstrap课程介绍</h2>
                </div>
                <p>By hejunwei</p>
            </div>
        </div>
    </div>
</div>
<p class="badge"><i class="glyphicon-piggy-bank"></i>hejunwei</p>
<script>
    $('#mytab').on('shown.bs.tab', function (e) {
        var txt = $(e.target).text();
        alert(txt);
    })
</script>