<?php

require_once 'connections/smotik_con.php';
$bdd = smotik_db::getInstance();
if(isset($_POST["pname"]) && isset($_POST["pdesignation"]) && isset($_POST["ptestimonial"])){
    try{
     $tvisible = $_POST["tvisible"];
    $pname = $_POST["pname"];
    $pdesignation = $_POST["pname"];
    $ptestimonial = $_POST["ptestimonial"];
    $sql  = "INSERT INTO `testimonials`(`person`, `designation`, `testimonial`, `visible`) 
    VALUES ('$pname','$pdesignation','$ptestimonial','$tvisible')";
    $query = $bdd->prepare($sql);
    $query->execute();
    if($query->rowCount() >0){
        echo "Done";
    }
    }
    catch(Exception $e){
        echo $e->getMesssage();
    }
   
}
$getdata = file_get_contents("php://input");
$json_data = json_decode($getdata,true);
if(isset($json_data["get_data"])){
    $sql = "SELECT `id`, `person`, `designation`, `testimonial`, `visible` FROM `testimonials`";
    $testimonial_response = '';
    $query = $bdd->prepare($sql);
    $query->execute();
    echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
    
}

if(isset($json_data["id"]) && isset($json_data["delete_test"])){
    //sprint_r($_POST);
    $id = $json_data["id"];
    $sql = "DELETE FROM testimonials where id = '$id' ";
    $query = $bdd->prepare($sql);
    $query->execute();
    if($query->rowCount()>0){
        echo "Done";
    }
}