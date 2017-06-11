<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function call_page($controller,$action){
    require_once 'controller/'.$controller.'_controller.php';
    
    switch ($controller) {
        case 'entrance':
             
            $controller = new EntranceController();
            break;
        case 'aboutus':
             
            $controller = new AboutusController();
            break;
        case 'error':
            require_once 'model/main.php'; 
            $controller = new ErrorController();
            break;
        default:
            break;
    }
    $controller->{$action}();
}

$valid_controller = array('entrance'=>["home"],"aboutus"=>["home"]);

if(array_key_exists($controller,$valid_controller)){
    if(in_array($action, $valid_controller[$controller])){
        call_page($controller, $action);
    }
    else{
        call_page('error', 'showerror');
    }
    
}
else{
        call_page('error', 'showerror');
    }