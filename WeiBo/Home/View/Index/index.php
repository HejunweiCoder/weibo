<extend name="./app"/>
<block name="content">
    <div style="height:80px;"></div>
    <div class="container" style="border: 1px dashed #cccccc;box-shadow: #cccccc">
        <div class="form-group">
            <label for="email"><span class="glyphicon glyphicon-send"></span> email</label>
            <i id="email-status"></i>
            <input name="email"
                   required
                   data-rule-maxlength="40"
                   data-msg-remote="邮箱重复"
                   list="email-complete"
                   class="form-control" id="email" placeholder="Enter email">
            <datalist id="email-complete">
                <option value="@qq.com">
                <option value="@163.com">
                <option value="@gmail.com">
            </datalist>
        </div>
    </div>
</block>
