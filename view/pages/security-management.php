<?php require_once 'model/solutions_model.php'; ?>   
<div class="inner-hght">
            <img class="img-responsive img-fl" src="img/banner2.jpg" alt="">
        </div>

        <div class="container srv" ng-controller="securityCtrl">
            <div class="row">
                <?php $new_page->getEntrancePage('security'); ?>
                 <?php
                if (!empty($_SESSION["selectedprods"]) && isset($_SESSION["selectedprods"])) {
                    # code...
                    foreach ( $_SESSION["selectedprods"] as $items) {
                        # code...
                        echo "<a href=\"\" class=\"btn btn-xl\" style=\"margin-top:5px;\" >".$items."</a>&nbsp;&nbsp;";
                    }
                }
                 ?>
            <product-listing filter="filter_prod" products="products"></product-listing>
            </div>
        </div>

        <p>&nbsp;</p>