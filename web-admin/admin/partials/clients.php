                <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class="panel-title">Add Clients</div>

                                    
                                </div>
                                <div class="panel-body">
                                    <div id="rootwizard">

                                        <form class="form-horizontal" role="form" method="post" id="set_clients" name="set_clients">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Clients Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="client_name" name="client_name" ng-model="client_name"
                                                           placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Image</label>
                                                <div class="col-md-10">
                                                    <input type="file" class="btn btn-default" id="client_image" name="client_image" file-model="client_image" required>
                                                    <p class="help-block" id="client_res" >
                                                        
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" name="client_vis" checked id="client_vis" value="1" ng-model="client_vis"> Visible
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <button type="submit" ng-click="save_client()" class="btn btn-primary"><i class="fa fa-save"></i>
                                                Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Clients</div>
                        </div>
                        <div class="panel-body">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Company</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr ng-repeat="client in clients">
                                        <td>{{client.id}}</td>
                                        <td>{{client.name}}</td>
                                        <td><img ng-src={{client.image_url}} style="width:50px;height:50px;"/></td>
                                        <td><button class="btn btn-primary" ng-click="delete_client(client.id)"><span class="glyphicon glyphicon-trash"></span></button></td>
                                        
                                       
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>