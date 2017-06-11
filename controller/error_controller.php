<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of error_controller
 *
 * @author jyoti
 */
class ErrorController {
    //put your code here
    public function showerror() {
        require_once 'view/pages/404.php';
    }
}
