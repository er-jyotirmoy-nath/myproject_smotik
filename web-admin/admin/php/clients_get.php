<?php 
include_once $_SERVER["DOCUMENT_ROOT"].'/myproject_smotik/web-admin/admin/clients_class_man.php';

$data = file_get_contents("php://input");

$json_data = json_decode($data,true);

if(isset($json_data["get_clients"])){
    
    $new_client->getClients();
    
}

if(isset($json_data["delete_id"])){
    $id = $json_data["delete_id"];
    $new_client->deleteClients($id);
}