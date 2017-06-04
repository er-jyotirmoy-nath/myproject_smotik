<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once 'connections/smotik_con.php';
class blogs_class extends smotik_db{
    public function blogUpload($data,$image) {
        try {
                $title = $data ["blog_title"];
                $content = $data ["text_blog"];
                $isvisible = (isset($data ["blogs_vis"]))?"1":"0";
		$target_dir = "images/";
		$target_file = $target_dir . basename ( $image ["blog_image"] ["name"] );
		$uploadOk = 1;
		$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
		// Check if image file is a actual image or fake image
		if (isset ( $title )) {
			$check = getimagesize ( $image ["blog_image"] ["tmp_name"] );
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
		if ($image ["blog_image"] ["size"] > 500000000) {
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
			if (move_uploaded_file ( $image ["blog_image"] ["tmp_name"], $target_file )) {
				echo "The file " . basename ( $image ["blog_image"] ["name"] ) . " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				die ();
			}
		}
		$sql = "INSERT INTO `blogs_table`(`title`, `image_url`, `content_blog`, `visible`) VALUES ('$title','$target_file','$content','$isvisible')";
		$query = $this->bdd->prepare ( $sql );
		$query->execute ();
		if ($query->rowCount () > 0) {
			echo "All Done";
		}
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
    }
    public function getBlogs() {
        $response_str = '';
        $sql = "SELECT * FROM `blogs_table`";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
		
		$response_str .= '<tr><td>'.$row["id"].'</td>';
		$response_str .= '<td>'.$row["title"].'</td>';
		$response_str .= '<td><img src="'.$row["image_url"].'" style="width:40px;height:40px;"/></td>';
		$response_str .= '<td>'.substr($row["content_blog"],0,85).'...</td>';
		$response_str .= '<td><a href="blogs_man.php?id='.$row["id"].'" id="del_banner" data-id="'.$row["id"].'"><i class="glyphicon glyphicon-edit"></i></a></td></tr>';
		
	}
	echo $response_str;
    }
    public function blogDetail($param) {
        $temp = array();
        $sql = "SELECT `id`, `title`, `image_url`, `content_blog`, `visible` FROM `blogs_table` WHERE id = '$param'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            $temp["subtitle"] = $row["title"];
            $temp["content"] = ($row["content_blog"]);
        }
        echo json_encode($temp);
    }
}
$new_blog = new blogs_class();

if(isset($_POST["blog_title"]) && isset($_POST["text_blog"]) && isset($_POST["blogs_vis"])){
    $new_blog->blogUpload($_POST, $_FILES);
}
if(isset($_GET["load_blogs"])){
    $new_blog->getBlogs();
}
if(isset($_GET["get_content"]) && isset($_GET["id"])){
    $param = $_GET["id"];
    $new_blog->blogDetail($param);
}