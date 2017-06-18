<?php
// print_r($_POST);
require_once 'connections/bdd.php';
$bdd = smotik_db::getInstance();
if (isset ( $_POST ["banner_title"] ) && isset ( $_FILES ["banner_image"] ["tmp_name"] )) {
	try {
		$title = filter_input ( INPUT_POST, "banner_title" );
		$isvisible = filter_input ( INPUT_POST, "ban_show" );
		
		$target_dir = "images/";
		$target_file = $target_dir . basename ( $_FILES ["banner_image"] ["name"] );
		$uploadOk = 1;
		$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
		// Check if image file is a actual image or fake image
		if (isset ( $_POST ["banner_title"] )) {
			$check = getimagesize ( $_FILES ["banner_image"] ["tmp_name"] );
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
		if ($_FILES ["banner_image"] ["size"] > 500000000) {
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
			if (move_uploaded_file ( $_FILES ["banner_image"] ["tmp_name"], $target_file )) {
				echo "The file " . basename ( $_FILES ["banner_image"] ["name"] ) . " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				die ();
			}
		}
		$sql = "INSERT INTO `banner_table`(`image_url`, `title`, `visible`) VALUES ('$target_file','$title','$isvisible')";
		$query = $bdd->prepare ( $sql );
		$query->execute ();
		if ($query->rowCount () > 0) {
			echo "All Done";
		}
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}

if(isset($_GET["load_data"])){
	$response_str = '';
	$sql = "SELECT * FROM banner_table";
	$query = $bdd->prepare($sql);
	$query->execute();
	while($row = $query->fetch(PDO::FETCH_ASSOC)){
		
		$response_str .= '<tr><td>'.$row["id"].'</td>';
		$response_str .= '<td>'.$row["title"].'</td>';
		$response_str .= '<td>'.$row["image_url"].'</td>';
		$response_str .= '<td><img src="'.$row["image_url"].'" style="width:20px;height:20px;"/></td>';
		$response_str .= '<td><a id="del_banner" data-id="'.$row["id"].'"><i class="glyphicon glyphicon-trash"></i></a></td></tr>';
		
	}
	echo $response_str;
}


if(isset($_POST["id"]) && isset($_POST["delete_ban"])){
    $id = $_POST["id"];
    $sql="DELETE from BANNER_TABLE WHERE ID='$id'";
    $query=$bdd->prepare($sql);
    $query->execute();
    if($query->rowCount()>0){
        echo "Done";
    }
}