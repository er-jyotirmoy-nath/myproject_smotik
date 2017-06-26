<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Add Products</div>

                <div class="panel-options">
                </div>
            </div>
            <div class="panel-body">
                <div id="rootwizard">

                    <form class="form-horizontal" role="form" method="post" name="set_products">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Section</label>
                            <div class="col-sm-10">
                                <select class="form-control" ng-model="select_section" name="select_section">
                                    <option>Select Section</option>
                                    <option value="entrance" selected>Entrance Management</option>
            <option value="security">Safety and Security Management</option>
            <option value="smarthome">Smart Home Management</option>
            <option value="music">Music Zoning</option>
             <option value="hospitality">Hospitality Solutions</option>
             <option value="conference">Conference Room Automation Solutions & Systems</option>
             <option value="smartsol">Smart Solutions</option>

                                </select><br>
                                <span class="text-info" id="selected_section"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Product</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" ng-model="prod_name" name="prod_name"
                                       placeholder="Name" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Product Image</label>
                            <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4">
              <input type="file" class="btn btn-default" file-model="prod_image_1"  required="required" name="prod_image_1">

                                </div>
                                <div class="col-md-4">
              <input type="file" class="btn btn-default" file-model="prod_image_2"  required="required" name="prod_image_2">

                                </div>
                                <div class="col-md-4">
              <input type="file" class="btn btn-default" file-model="prod_image_3"  required="required" name="prod_image_3">

                                </div>

                            </div>                         

                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Product Use Images</label>
                            <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
              <input type="file" class="btn btn-default" file-model="prod_image_use_1"  required="required" name="prod_image_use_1">

                                </div>
                                <div class="col-md-6">
              <input type="file" class="btn btn-default" file-model="prod_image_use_2"  required="required" name="prod_image_use_2">

                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
              <input type="file" class="btn btn-default" file-model="prod_image_use_3"  required="required" name="prod_image_use_3">

                                </div>
                                <div class="col-md-6">
              <input type="file" class="btn btn-default" file-model="prod_image_use_4"  required="required" name="prod_image_use_4">

                                </div>
                            </div>
                               </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                             <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel" required="required"></textarea>


                            </div>
                        </div>   
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label> <input type="checkbox" name="prod_vis" checked ng-model="prod_vis" value="1"> Visible
                                    </label>
                                </div>

                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" ng-click="save_prod()" ng-disabled="set_products.$invalid"><i class="fa fa-save"></i>
                            Submit</button>
                        <p class="help-block" id="entrance_case_res">

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Cases</div>
    </div>
    <div class="panel-body">
    <label>Filter Products</label><select ng-model="prod_filter" class="form-control" style="width: 200px;">
            <option value="">All</option>
            <option value="entrance" selected>Entrance Management</option>
            <option value="security">Safety and Security Management</option>
            <option value="smarthome">Smart Home Management</option>
            <option value="music">Music Zoning</option>
             <option value="hospitality">Hospitality Solutions</option>
             <option value="conference">Conference Room Automation Solutions & Systems</option>
             <option value="smartsol">Smart Solutions</option>
    </select>
    <br>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Section</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody  ng-repeat="product in products | filter: prod_filter">
            <tr>
                <td>{{product.id}}</td>
                <td>{{product.name}}</td>
                <td>{{product.section}}</td>
                <td ng-bind-html="product.description"></td>
                <td>{{product.carousel_1}}</td>
                <td><button class="btn btn-primary" ng-click="delete_product(product.id)"><span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>

            </tbody>
        </table>
    </div>
</div>