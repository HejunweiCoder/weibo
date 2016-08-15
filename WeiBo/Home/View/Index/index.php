<extend name="./app"/>
<block name="content">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/images/kate.jpg" alt="#">
                <div class="carousel-caption">
                    卡特琳娜
                </div>
            </div>
            <div class="item">
                <img src="/images/vn.jpg" alt="#">
                <div class="carousel-caption">
                    维恩
                </div>
            </div>
            <div class="item">
                <img src="/images/nvdao.jpg" alt="#">
                <div class="carousel-caption">
                    刀妹
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="starter-template">
            <h1>启明于今天</h1>
            <p class="lead"><span class="glyphicon glyphicon-star">相信这是一个新的开始，而且明天会更好.</span><br> 请让我们的想法付诸于行动，一切都会变得越来越好.</p>
        </div>
    </div>

</block>
