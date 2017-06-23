<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Security Management</div>

        <div class="panel-options">
            <a data-target="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh" ng-click="refresh()"></i></a>
            
        </div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" id="security_frm" method="post">
            <label>Subtitle:</label>
            <input type="text" class="form-control" id="security_text" ng-model="security_text" name="security_text">
            <br>
            
            <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel"></textarea>
            <br>
            <button type="submit" class="btn btn-primary" id="save_btn" ng-click="save_content()" >Save</button>

            <span id="text-success" id="security_res"></span>
        </form>
    </div>
</div>