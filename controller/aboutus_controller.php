<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aboutus_controller
 *
 * @author jyoti
 */
class AboutusController {
    //put your code here
    public function home() {
        require_once 'model/aboutus_model.php';
        include_once 'view/pages/aboutus_page.php';
    }
}
