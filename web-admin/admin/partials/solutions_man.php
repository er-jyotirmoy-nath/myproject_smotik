<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Security Management</div>

        <div class="panel-options">
            <a data-target="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh" ng-click="refresh()"></i></a>
            
        </div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" id="solution_frm" method="post">
        <select ng-model="section_type">
            <option value="entrance" selected>Entrance Management</option>
            <option value="security">Safety and Security Management</option>
            <option value="smarthome">Smart Home Management</option>
            <option value="music">Music Zoning</option>
             <option value="hospitality">Hospitality Solutions</option>
             <option value="conference">Conference Room Automation Solutions & Systems</option>
             <option value="smartsol">Smart Solutions</option>
             <option value="customerservice">Customer Services</option>
                     </select>
        <button type="button" ng-click="get_response()">Load Content</button><br>
            <label>Subtitle:</label>
            <input type="text" class="form-control" id="solution_text" ng-model="solution_text" name="solution_text">
            <br>
            
            <textarea ui-tinymce="tinymceOptions" ng-model="tinymceModel"></textarea>
            <br>
            <button type="submit" class="btn btn-primary" id="save_btn" ng-click="save_content()" >Save</button>

            <span id="text-success" id="solution_res"></span>
        </form>
    </div>
</div>