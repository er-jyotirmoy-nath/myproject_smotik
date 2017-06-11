<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EntranceController {
    public function home() {
        require_once 'model/entrance_model.php';
        include_once 'view/pages/entrance-management.php';
    }
}
