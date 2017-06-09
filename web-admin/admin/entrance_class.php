<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of entrance_class
 *
 * @author jyoti
 */
session_start();
require_once 'model/content_class.php';
class entrance_class extends content_class {
    //put your code here
    public function __construct() {
        ;
    }
    public function UseCaseUpload($data, $image) {
        try {
            $bdd = smotik_db::getInstance();
            $title = $data ["company_name"];
            $content = $data ["entrance_usecase_content"];
            $isvisible = $data ["case_vis"];
            $target_dir = "images/";
            $target_file = $target_dir . basename($image ["company_image"] ["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if (isset($image ["company_image"] ["tmp_name"])) {
                if (isset($title)) {
                    $check = getimagesize($image ["company_image"] ["tmp_name"]);
                    if ($check !== false) {
                        echo "File is an image - " . $check ["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        die();
                        $uploadOk = 0;
                    }
                }
                // Check if file already exists
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    die();
                    $uploadOk = 0;
                }
                // Check file size
                if ($image ["company_image"] ["size"] > 500000000) {
                    echo "Sorry, your file is too large.";
                    die();
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG") {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    die();
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    die();
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($image ["company_image"] ["tmp_name"], $target_file)) {
                        echo "The file " . basename($image ["company_image"] ["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        die();
                    }
                }
            }
            $date_blog = date('d-m-Y', strtotime('now'));
            if ($data["entry_type"] == "save") {
                $sql = "INSERT INTO `blogs_table`(`title`, `image_url`, `content_blog`, `visible`, `date_blog`) VALUES ('$title','$target_file','$content','$isvisible','$date_blog')";
            } else if ($data["entry_type"] == "update") {
                $blog_id = $data["blog_id"];
                $sql = "UPDATE `blogs_table` SET `title`='$title',`image_url`='$target_file',`content_blog`='$content',`visible`='$isvisible', `date_blog` = '$date_blog' WHERE `id` = '$blog_id'";
            }
            $query = $bdd->prepare($sql);
            $query->execute();
            if ($query->rowCount() > 0) {
                echo " Saved!!";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
$new_entrance_content = new entrance_class();

if(isset($_POST["entrance_text"]) && isset($_POST["entrance_about"]) && isset($_POST["set_content"])){
    $subtitle = filter_input(INPUT_POST, "entrance_text");
    $content = filter_input(INPUT_POST, "entrance_about");
    $new_entrance_content->saveContent($subtitle, $content, 'entrance');
}
if(isset($_GET["get_content"])){
    $new_about_content->getContent('entrance');
}