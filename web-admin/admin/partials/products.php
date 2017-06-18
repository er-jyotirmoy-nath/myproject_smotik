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

                    <form class="form-horizontal" role="form" method="post" id="set_usecases">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Section</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="select_section" name="select_section">
                                    <option>Select Section</option>
                                    <option value="section1">Section 1</option>
                                    <option value="section2">Section 2</option>
                                    <option value="section3">Section 3</option>
                                    <option value="section4">Section 4</option>

                                </select><br>
                                <span class="text-info" id="selected_section"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Product</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company_name" name="prod_name"
                                       placeholder="Name" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Carousel Image</label>
                            <div class="col-md-10">

                                <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">

                                <p class="help-block" id="entrance_case_res">

                                </p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Product Use</label>
                            <div class="col-md-10">

                                <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">
                                <input type="file" class="btn btn-default" id="userfile[]" name="userfile[]" required="required">


                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea id="tinymce_full" id="entrance_usecase_content" name="entrance_usecase_content" required="required"></textarea>

                            </div>
                        </div>   
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label> <input type="checkbox" name="case_vis" checked id="case_vis" value="1"> Visible
                                    </label>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="case_save_btn"><i class="fa fa-save"></i>
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
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody id="usecase_data_table">


            </tbody>
        </table>
    </div>
</div>