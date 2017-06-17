<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Manage Blog</div>

        <div class="panel-options">

        </div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" id="blog_frm" method="post">
            <label>Blog Title:</label>
            <input type="text" class="form-control" id="blog_title" required="required" name="blog_title">
            <br>

            <label >Blog Image</label>

            <input type="file" class="btn btn-default" id="blog_image" required="required" name="blog_image">
            <br>
            <div class="checkbox">
                <label> <input type="checkbox" name="blogs_vis" id="blogs_vis" > Visible
                </label>
            </div>
            <br>
            <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel"></textarea>
            
            <br>
            <input type="hidden" name="blog_id" id="blog_id" />
            <input type="hidden" name="ent_type" id="ent_type" value="save" />
            <button type="submit" class="btn btn-primary" id="save_btn" >Save</button>

            <span class="text-success" id="blogs_res"></span>
        </form>
    </div>
</div>
