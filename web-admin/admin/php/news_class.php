<?php
print_r($_POST);
print_r($_FILES);
$data = file_get_contents('php://input');
$json = json_decode($data,true);
print_r($json);
 ?>
