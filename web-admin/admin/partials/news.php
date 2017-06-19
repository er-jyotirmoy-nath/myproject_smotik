<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Manage News and Updates</div>

        <div class="panel-options">

        </div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" name="blog_frm" method="post">
            <label>News/Updates Title:</label>
            <input type="text" class="form-control" id="news_title" ng-model="news_title" required="required" name="news_title">
            <br>

            <label >News Image</label>

            <input type="file" class="btn btn-default" id="news_image" file-model="news_image"  required="required" name="news_image">
            <br>
            <div class="checkbox">
                <label> <input type="checkbox" name="news_vis" id="news_vis"  ng-model="news_vis" > Visible
                </label>
            </div>
            <br>
            <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel" required="required"></textarea>
            <br>
            <input type="hidden" name="news_id" id="news_id" />
            <input type="hidden" name="ent_type" id="ent_type" value="save" />
            <button type="submit" ng-click="save_news()" class="btn btn-primary" id="save_btn" ng-disabled="blog_frm.$invalid" >Save</button>

            <span class="text-success" id="news_res"></span>
        </form>
    </div>
</div>
