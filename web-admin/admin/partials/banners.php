

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Add Banners</div>

                <div class="panel-options">

                </div>
            </div>
            <div class="panel-body">
                <div id="rootwizard">

                    <form class="form-horizontal" method="post" id="upload_data" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Title on Banner</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="banner_title" name="banner_title"
                                       placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" class="btn btn-default" name="banner_image" id="banner_image">
                                <p class="help-block" id="upload_res">
                                    URl
                                </p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label> <input type="checkbox" name="ban_show"> Visible
                                    </label>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                            Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Banners</div>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image Url</th>
                    <th>Image</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody id="table_data">


            </tbody>
        </table>
    </div>
</div>