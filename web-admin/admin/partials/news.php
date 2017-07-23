<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Manage News and Updates</div>

        <div class="panel-options">

        </div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" name="news_frm" id="news_frm" method="post">
            <label>News/Updates Title:</label>
            <input type="text" class="form-control" id="news_title" ng-model="news_title" required="required" name="news_title">
            <br>

            <label >News Image</label>

            <input type="file" class="btn btn-default" id="news_image" file-model="news_image"  required="required" name="news_image">
            <br>
            <div class="checkbox">
                <label> <input type="checkbox" name="news_vis" id="news_vis" ng-true-value="'1'" ng-false-value="'0'"  ng-model="news_vis" > Visible
                </label>
            </div>
            <br>
            <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel" required="required"></textarea>
            <br>
            <input type="hidden" name="news_id" id="news_id" />
            <input type="hidden" name="ent_type" id="ent_type" value="save" />
            <button type="submit" ng-click="save_news()" class="btn btn-primary" id="save_btn" ng-disabled="news_frm.$invalid" >Save</button>

            <span class="text-success" id="news_res"></span>
        </form>
    </div>
</div>
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Testimonials</div>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" border="0"
            class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image Url</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="news in news_item">
                    <td>{{news.id}}</td>
                    <td>{{news.title}}</td>
                    <td ng-bind-html="news.content"></td>
                    <td><img ng-src="{{news.image_url}}" style="width: 50px;height: 50px;"></td>
                    <td><button class="btn btn-primary"
                            ng-click="delete_rec(news.id)">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>