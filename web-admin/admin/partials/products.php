<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">
                    Add Products
                </div>
                <div class="panel-options">
                </div>
            </div>
            <div class="panel-body">
                <div id="rootwizard">
                    <form class="form-horizontal" method="post" name="set_products" role="form">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputEmail3">
                                Section
                            </label>
                            <div class="col-sm-10">
                                <select class="form-control" name="select_section" ng-model="select_section">
                                    <option>
                                        Select Section
                                    </option>
                                    <option selected="" value="entrance">
                                        Entrance Management
                                    </option>
                                    <option value="security">
                                        Safety and Security Management
                                    </option>
                                    <option value="smarthome">
                                        Smart Home Management
                                    </option>
                                    <option value="music">
                                        Music Zoning
                                    </option>
                                    <option value="hospitality">
                                        Hospitality Solutions
                                    </option>
                                    <option value="conference">
                                        Conference Room Automation Solutions & Systems
                                    </option>
                                    <option value="smartsol">
                                        Smart Solutions
                                    </option>
                                </select>
                                <br>
                                    <span class="text-info" id="selected_section">
                                    </span>
                                </br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputEmail3">
                                Product
                            </label>
                            <div class="col-sm-10">
                                <input class="form-control" name="prod_name" ng-model="prod_name" placeholder="Name" required="required" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">
                                Product Image
                            </label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input class="btn btn-default" file-model="prod_image_1" name="prod_image_1" required="required" type="file">
                                        </input>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="btn btn-default" file-model="prod_image_2" name="prod_image_2" required="required" type="file">
                                        </input>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="btn btn-default" file-model="prod_image_3" name="prod_image_3" required="required" type="file">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">
                                Product Use Images
                            </label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="btn btn-default" file-model="prod_image_use_1" name="prod_image_use_1" required="required" type="file">
                                        </input>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="btn btn-default" file-model="prod_image_use_2" name="prod_image_use_2" required="required" type="file">
                                        </input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="btn btn-default" file-model="prod_image_use_3" name="prod_image_use_3" required="required" type="file">
                                        </input>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="btn btn-default" file-model="prod_image_use_4" name="prod_image_use_4" required="required" type="file">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="inputEmail3">
                                        Type 1
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="prodtype_1" ng-model="prodtype_1" placeholder="Sub Type 1"  type="text">
                                        </input>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="inputEmail3">
                                        Type 2
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="prodtype_2" ng-model="prodtype_2" placeholder="Sub Type 2"  type="text">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="inputEmail3">
                                        Type 3
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="prodtype_3" ng-model="prodtype_3" placeholder="Sub Type 3"  type="text">
                                        </input>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="inputEmail3">
                                        Type 4
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="prodtype_4" ng-model="prodtype_4" placeholder="Sub Type 4"  type="text">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Description
                            </label>
                            <div class="col-sm-10">
                                <textarea ng-model="tinymceModel" required="required" ui-tinymce="tinymceOptions">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input ng-value="1" name="prod_vis" ng-model="prod_vis" type="checkbox" value="1">
                                            Visible
                                        </input>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" ng-click="save_prod()" ng-disabled="set_products.$invalid" type="button">
                            <i class="fa fa-save">
                            </i>
                            Submit
                        </button>
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
        <div class="panel-title">
            Cases
        </div>
    </div>
    <div class="panel-body">
        <label>
            Filter Products
        </label>
        <select class="form-control" ng-model="prod_filter" style="width: 200px;">
            <option value="">
                All
            </option>
            <option selected="" value="entrance">
                Entrance Management
            </option>
            <option value="security">
                Safety and Security Management
            </option>
            <option value="smarthome">
                Smart Home Management
            </option>
            <option value="music">
                Music Zoning
            </option>
            <option value="hospitality">
                Hospitality Solutions
            </option>
            <option value="conference">
                Conference Room Automation Solutions & Systems
            </option>
            <option value="smartsol">
                Smart Solutions
            </option>
        </select>
        <br>
            <table border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="example" style="width: 100%">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Section
                        </th>
                        <th>
                            Content
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody ng-repeat="product in products | filter: prod_filter">
                    <tr>
                        <td>
                            {{product.id}}
                        </td>
                        <td>
                            {{product.name}}
                        </td>
                        <td>
                            {{product.section}}
                        </td>
                        <td ng-bind-html="product.description">
                        </td>
                        <td>
                            {{product.carousel_1}}
                        </td>
                        <td>
                            <button class="btn btn-primary" ng-click="delete_product(product.id)">
                                <span class="glyphicon glyphicon-trash">
                                </span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </br>
    </div>
</div>