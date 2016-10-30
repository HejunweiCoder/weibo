<style type="text/css">
    #preview-pane {
        left: 400px;
        position: absolute;
        width: 100px;
        height: 120px;
        overflow: hidden;
    }
</style>
<div class="row">
    <include file="partials/user-sidebar"/>
    <br>
    <div class="col-md-4">
        <div class="container-fluid">
            <form action="/users/{$user.id}/avatar" enctype="multipart/form-data" method="post">
                <i class="fa fa-file-photo-o" aria-hidden="true"></i> 头像：</label>
                <div class="form-group">
                    <img id="avatar" src="{$user.avatar}" alt="avatar" class="img-responsive">
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
    <div class="col-md-2">
        头像预览:
        <div id="preview-pane">
            <div class="preview-container">
                <img src="{$user.avatar}" width="200" height="200" alt="Preview">
            </div>
        </div>
    </div>
</div>

<script>
    var jcrop_api,
        boundx,
        boundy,

        // Grab some information about the preview pane
        $preview = $('#preview-pane'),
        $pcnt = $('#preview-pane .preview-container'),
        $pimg = $('#preview-pane .preview-container img'),

        xsize = $pcnt.width(),
        ysize = $pcnt.height();

    console.log('init', [xsize, ysize]);

    $('#avatar').Jcrop({
        onChange: updatePreview,
        onSelect: updatePreview,
        aspectRatio: xsize / ysize
    }, function () {
        // Use the API to get the real image size
        var bounds = this.getBounds();
        boundx = bounds[0];
        boundy = bounds[1];
        // Store the API in the jcrop_api variable
        jcrop_api = this;

        // Move the preview into the jcrop container for css positioning
        $preview.appendTo(jcrop_api.ui.holder);
    });

    function updatePreview(c) {
        if (parseInt(c.w) > 0) {
            var rx = xsize / c.w;
            var ry = ysize / c.h;

            $pimg.css({
                width: Math.round(rx * boundx) + 'px',
                height: Math.round(ry * boundy) + 'px',
                marginLeft: '-' + Math.round(rx * c.x) + 'px',
                marginTop: '-' + Math.round(ry * c.y) + 'px'
            });
        }
    }
    ;
</script>