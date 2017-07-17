<?php 

//session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/myproject_smotik/model/aboutus_model.php';
/**
* 
*/
class footerName extends aboutus_model
{
	
	
}
$newfoter = new footerName();
$newfoter->getAboutUs();
$data = json_decode("php://input",true);
print_r($data);
if(isset($data["getdata"])){
	echo "string";
	$newfoter->getAboutUs();
}