<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clients_class_man
 *
 * @author jyoti
 */
session_start();
require_once 'smotik_con.php';
class clients_class_man extends smotik_db {
    //put your code here
    public function clientUpload($data,$image) {
        try {
                $title = $data ["client_name"];
                $isvisible = $data ["client_vis"];
		$target_dir = "images/";
		$target_file = $target_dir . basename ( $image ["client_image"] ["name"] );
		$uploadOk = 1;
		$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
		// Check if image file is a actual image or fake image
		if (isset ( $title )) {
			$check = getimagesize ( $image ["client_image"] ["tmp_name"] );
			if ($check !== false) {
				echo "File is an image - " . $check ["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				die ();
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists ( $target_file )) {
			echo "Sorry, file already exists.";
			die ();
			$uploadOk = 0;
		}
		// Check file size
		if ($image ["client_image"] ["size"] > 500000000) {
			echo "Sorry, your file is too large.";
			die ();
			$uploadOk = 0;
		}
		// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			die ();
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			die ();
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file ( $image ["client_image"] ["tmp_name"], $target_file )) {
				echo "The file " . basename ( $image ["client_image"] ["name"] ) . " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				die ();
			}
		}
		$sql = "INSERT INTO `clients`( `image_url`, `name`, `visible`) VALUES ('$target_file','$title','$isvisible')";
		$query = $this->bdd->prepare ( $sql );
		$query->execute ();
		if ($query->rowCount () > 0) {
			echo "All Done";
		}
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
    }
    
    public function getClients() {
        $response_str = '';
        $sql = "Select * from clients";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
		
		$response_str .= '<tr><td>'.$row["id"].'</td>';
		$response_str .= '<td>'.$row["name"].'</td>';
		$response_str .= '<td>'.$row["image_url"].'</td>';
		$response_str .= '<td><img src="'.$row["image_url"].'" style="width:20px;height:20px;"/></td>';
		$response_str .= '<td><a id="del_banner" data-id="'.$row["id"].'"><i class="glyphicon glyphicon-trash"></i></a></td></tr>';
		
	}
	echo $response_str;
    }
}
$new_client = new clients_class_man();

if (isset ( $_POST ["client_name"] ) && isset ( $_FILES ["client_image"] ["tmp_name"] )) {
    $new_client->clientUpload($_POST,$_FILES);
}