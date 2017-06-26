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
require_once $_SERVER["DOCUMENT_ROOT"].'/myproject_smotik/web-admin/admin/model/content_class.php';


class entrance_class extends content_class {

    //put your code here
    public function __construct() {
        ;
    }

    private function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }

        return $file_ary;
    }

    public function uploadExample($data, $image) {
        $bdd = smotik_db::getInstance();
        $temp = array();
        $title = $data ["company_name"];
        $content = $data ["entrance_usecase_content"];
        $isvisible = $data ["case_vis"];
        if ($image['userfile']) {
            $file_ary = $this->reArrayFiles($image['userfile']);
            //print_r($image['userfile']);
            foreach ($file_ary as $file) {
                /*print 'File Name: ' . $file['name'];
                print 'File Temp Name: ' . $file['tmp_name'];
                print 'File Size: ' . $file['size'];
                print 'File Error: ' . $file['error'];
                print 'File Type: ' . $file['type'];*/
                
                if ($file['type'] == "image/jpeg" && $file['error'] == 0) {
                    $target_dir = 'images/entrance_prods/';
                    $target_file = $target_dir . basename($file["name"]);
                    if (move_uploaded_file($file ["tmp_name"], $target_file)) {
                        //echo "The file " . basename($file ["name"]) . " has been uploaded.";
                        $temp[] = $target_file;
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        die();
                    }
                } else {
                    echo "Wrong file Extension or duplicate file existss";
                    die();
                }
            }
            $date_blog = date('d-m-Y', strtotime('now'));
            
            if(1){$sql = "INSERT INTO `products_table`(`name`, `description`, `section`, `carousel_1`,"
                    . " `carousel_2`, `carousel_3`, `use_1`, `use_2`, `use_3`, `use_4`, `visible`) "
                    . "VALUES ('$title','$content','entrance',"
                    . "'".$temp[0]."','".$temp[1]."','".$temp[2]."','".$temp[3]."','".$temp[4]."','".$temp[5]."','".$temp[6]."','$isvisible')";
            $query = $bdd->prepare($sql);
            $query->execute();
            if ($query->rowCount() > 0) {
                echo " Saved!!";
            }}
            
        }
    }

    

    public function getUsecases() {
        $bdd = smotik_db::getInstance();
        $response_str = '';
        $sql = "Select * from entrance_mgmt_usecase";
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $response_str .= '<tr><td>' . $row["id"] . '</td>';
            $response_str .= '<td>' . $row["title"] . '</td>';
            $response_str .= '<td>' . $row["content"] . '</td>';
            $response_str .= '<td><img src="' . $row["image_url"] . '" style="width:20px;height:20px;"/></td>';
            $response_str .= '<td><a id="del_banner" data-id="' . $row["id"] . '"><i class="glyphicon glyphicon-trash"></i></a></td></tr>';
        }
        echo $response_str;
    }

}

$new_entrance_content = new entrance_class();

if (isset($_POST["solution_text"]) && isset($_POST["solution_content"]) && isset($_POST["section"])) {

    $subtitle = filter_input(INPUT_POST, "solution_text");
    $content = filter_input(INPUT_POST, "solution_content");
    $section = filter_input(INPUT_POST, "section");
    $new_entrance_content->saveContent($subtitle, $content,$section);
}

if (isset($_POST["get_content"]) && isset($_POST["section"])) {
    $new_entrance_content->getContent($_POST["section"]);
}

if (isset($_POST["company_name"]) && isset($_POST["entrance_usecase_content"]) && isset($_POST["case_vis"])) {
    $new_entrance_content->uploadExample($_POST, $_FILES);
}
if (isset($_GET["load_usecases"])) {
    $new_entrance_content->getUsecases();
}