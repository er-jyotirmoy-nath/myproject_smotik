<?php

require_once 'connections/bdd.php';
print_r($_POST);
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

if(isset($_GET["load_testimonial"])){
    $sql = "SELECT `id`, `person`, `designation`, `testimonial`, `visible` FROM `testimonials`";
    $testimonial_response = '';
    $query = $bdd->prepare($sql);
    $query->execute();
    
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $testimonial_response .= "<tr>";
        $testimonial_response .= "<td>".$row["id"]."</td>";
        $testimonial_response .= "<td>".$row["person"]."</td>";
        $testimonial_response .= "<td>".$row["designation"]."</td>";
        $testimonial_response .= "<td>".$row["testimonial"]."</td>";
        //$testimonial_response .= "<td>".$row["visible"]."</td>";
        $testimonial_response .= "<td>Edit</td>";
        $testimonial_response .= "</tr>";
    }
    echo $testimonial_response;
}