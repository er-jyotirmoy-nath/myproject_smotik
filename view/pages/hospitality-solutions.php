  <?php require_once 'model/solutions_model.php'; ?>   
<div class="inner-hght">
            <img class="img-responsive img-fl" src="img/banner2.jpg" alt="">
        </div>

        <div class="container srv" ng-controller="hospitalityCtrl">
            <div class="row">
                <?php $new_page->getEntrancePage('hospitality'); ?>
                 <product-listing filter_prod="filter_prod" products="products"></product-listing>


            </div>
        </div>

        <p>&nbsp;</p>