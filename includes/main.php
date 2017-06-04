<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../myproject_smotik/web-admin/admin/connections/smotik_con.php';

class main extends smotik_db {

    public function imageSlideCounter() {
        $indicators = '';
        $counter = 0;
        $sql = "SELECT * FROM `banner_table` WHERE id is not null";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            if ($counter == 0) {
                $indicators .= '<li data-target="#myCarousel" data-slide-to="' . $counter . '" class="active"></li>';
            } else {
                $indicators .= '<li data-target="#myCarousel" data-slide-to="' . $counter . '"></li>';
            }
            $counter++;
        }
        echo $indicators;
    }

    public function imageSlider() {
        $sliders = '';
        $counter = 0;
        $sql = "SELECT * FROM `banner_table` WHERE id is not null and visible != 0";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            if ($counter == 0) {
                $sliders .= '<div class="item active">
				<div class="fill" style="background-image: url(\'web-admin/admin/' . $row["image_url"] . '\');"></div>
				<div class="carousel-caption">
					<h2>' . $row["title"] . '</h2>
				</div>
			</div>';
            } else {
                $sliders .= '<div class="item">
				<div class="fill" style="background-image: url(\'web-admin/admin/' . $row["image_url"] . '\');"></div>
				<div class="carousel-caption">
					<h2>' . $row["title"] . '</h2>
				</div>
			</div>';
            }
            $counter++;
        }
        echo $sliders;
    }

    public function getAboutUs() {
        $content = '';
        $sql = "SELECT * FROM `home_content_table` WHERE section = 'about_us'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $content .= $row["content"];
        }
        echo $content;
    }

    public function testimonialSliderCounter() {
        $indicator = '';
        $counter = 0;
        $sql = "SELECT `id`, `person`, `designation`, `testimonial`, `visible` FROM `testimonials` WHERE visible = '1'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            if ($counter == 0) {
                $indicator .= '<li data-target="#myCarousel1" data-slide-to="' . $counter . '" class="active"></li>';
            } else {
                $indicator .= '<li data-target="#myCarousel1" data-slide-to="' . $counter . '"></li>';
            }
            $counter++;
        }
        
        echo $indicator;
    }

    public function testimonialSliders() {
        $content = '';
        $counter = 0;
        $sql = "SELECT `id`, `person`, `designation`, `testimonial`, `visible` FROM `testimonials` WHERE visible = '1'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            if ($counter == 0) {
                $content .= '<div class="item active">
							<div class="text-center">
								<img src="img/img1.jpg" class="img-thumbnail" alt="" />
							</div>
							<h4>"' . $row["testimonial"] . '"<br>
								<br>
								<span>' . $row["person"] . '<br>' . $row["designation"] . '</span>
							</h4>
						</div>';
            } else {
                $content .= '<div class="item">
							<div class="text-center">
								<img src="img/img1.jpg" class="img-thumbnail" alt="" />
							</div>
							<h4>"' . $row["testimonial"] . '"<br>
								<br>
								<span>' . $row["person"] . '<br>' . $row["designation"] . '</span>
							</h4>
						</div>';
            }
            $counter++;
        }
        
        echo $content;
    }
    
    public function getclientdetails() {
        $content = '';
        $sql = "SELECT `id`, `name`, `image_url`, `visible` FROM `clients` WHERE visible = 1";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $content.=' <div class="col-sm-2 col-xs-6">
                    <img src="web-admin/admin/'.$row["image_url"].'" class="img-thumbnail" alt="'.$row["name"].'" />
                </div>';
        }
        echo $content;
    }
}

$new_web_load = new main();
