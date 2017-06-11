<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of entrance_model
 *
 * @author jyoti
 */
require_once $_SERVER["DOCUMENT_ROOT"].'/myproject_smotik/web-admin/admin/connections/smotik_con.php';
class entrance_model {
    //put your code here
    public function getEntrancePage() {
        $bdd = smotik_db::getInstance();
        
        $content = '';
        $sql = "SELECT * FROM `home_content_table` where section = 'entrance' limit 0,1";
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $content .= '<h2 class="page-header chdg">'.$row["sub_content"].'</h2>';
            $content .='<div class="col-md-12 abt-txt">'. $row["content"].'<br></div>';
            
        }
        echo $content;
        
    }
    public function getProducts() {
        $bdd = smotik_db::getInstance();
        
        $content = '';
        $sql = "SELECT * FROM products_table where visible = '1' and section = 'entrance' ";
        $query = $bdd->prepare($sql);
        $query->execute();
        $j = 1;
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            if($j==1){$content .= '<div class="row">';}
            $content .='<div class="col-md-6 img-portfolio">
                        <a href="#"><img class="img-responsive img-hover" src="web-admin/admin/'.$row["image_url"].'" alt=""></a>
                        <h3>'.$row["title"].'</h3>
                        '.$row["content"].'
                    </div>';
            $j++;
            if($j > 2){$content .='</div>';$j=1;}
            
            
        }
        echo $content;
    }
}
$new_entrance = new entrance_model();
