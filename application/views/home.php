<section class="slider-section">
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
        <div class="carousel-inner" role="listbox">

            <?php $slider_info=$this->admin_model->slider_info();?>
            <?php $i=1;
            foreach($slider_info as $slider){
                if($i==1)
                {
                    echo " <div class='item active'>";
                }
                else 
                {
                      echo "<div class='item'>";
                }
            ?>
                <img src="<?php echo base_url().$slider->slider_image;?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_left">
                            <h4 data-animation="animated fadeInLeft"><?php echo $slider->slider_title?></h4>
                            <p data-animation="animated zoomInRight"><?php echo $slider->slider_short_desc?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php $i++; } ?>
           
            
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="option-area">
    <div class="container-fluid option"><!--row-4-top-->
        <a href="<?php echo base_url()?>pages/admission">
            <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 option-2" id="orange">
                <img src="<?php echo base_url()?>assets/images/blg-1.png">
                <h1>Classtune</h1>
                <p>Summerfield School is a multi-cultural institution with a curriculum based on the principles of American education....</p>
            </div>
        </a>
        <a href="<?php echo base_url()?>pages/result">
            <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 option-2" id="red">
                <img src="<?php echo base_url()?>assets/images/blg-2.png">
                <h1>Result </h1>
                <p>In the Elementary and Middle Schools the curriculum is holistic and inquiry-based in nature. Students are expected...</p>
            </div>
        </a>
        <a href="<?php echo base_url()?>pages/calender">
            <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 option-2" id="green">
                <img src="<?php echo base_url()?>assets/images/blg-3.png">
                <h1>Academic Calender</h1>
                <p>In 2013, we celebrated the 50th anniversary of the founding of our School in 1963 with an exciting, yearlong celebration....</p>
            </div>
        </a>
        <a href="<?php echo base_url()?>pages/photo_gallery">
            <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 option-2" id="blue">
                <img src="<?php echo base_url()?>assets/images/blg-4.png">
                <h1>Gallery</h1>
                <p>Summerfield Science Club, the most promising versatile and distinguished co-curricular activities club of Notre...</p>
            </div>
        </a>
    </div>
</section>
        
<section class="system-area">      
    <div class="container-fluid row4bottombg" id="overflowhidden">
        <div class="container">
            <ul style="margin:0; padding:0;">
                <li class="col-lg-4 col-sm-4 col-xs-10 row4bottombox">
                    <figure>
                        <a href="<?php echo base_url()?>pages/process">
                            <figcaption class="alt">
                                <h2>Pre-Admission</h2>
                                <p>Jessica Taylor performs with Liberty X at the South Tyneside Summer Festival held in Bents Park, South Shields. </p>
                            </figcaption>
                        </a>
                        <i class="fa fa-user-plus"></i> 
                        <h2>Pre-Admission</h2>
                     </figure>            
                </li>
                <li class="col-lg-4 col-sm-4 col-xs-10 row4bottombox">
                    <figure>                      
                        <a href="<?php echo base_url()?>pages/cambridge_edexcel">
                            <figcaption class="alt">
                                <h2>A Level</h2>
                                <p>Jessica Taylor performs with Liberty X at the South Tyneside Summer Festival held in Bents Park, South Shields.</p>
                            </figcaption>
                        </a>                      
                        <i class="fa fa-hand-o-up"></i>
                        <h2>A Level</h2>
                    </figure>            
                </li>
                <li class="col-lg-4 col-sm-4 col-xs-10 row4bottombox">
                    <figure>
                        <a href="<?php echo base_url()?>pages/contact">
                            <figcaption class="alt">
                                <h2>Feedback</h2>
                                <p>Jessica Taylor performs with Liberty X at the South Tyneside Summer Festival held in Bents Park, South Shields. </p>
                            </figcaption>
                        </a>
                        <i class="fa fa-comments"></i>
                        <h2>Feedback</h2>
                    </figure>            
                </li>
            </ul>
        </div>
    </div>
</section> 

<!-- <section class="slide-area">
    <div class="container">
        <h2>The Summerfield Timeline</h2>
        <div class="cd-horizontal-timeline">
            <div class="events-content">
                <ol>
                    <?php
                    $i=1;
                    $all_timeline_slider=$this->admin_model->timeline_slider_info();?>
                    <?php foreach($all_timeline_slider as $slider){?>
                       <?php if($i == 1){
                         echo "<li class='selected' data-date='<?php echo $slider->timeline_slider_date?>'>";
                    }
                    else 
                    {
                        echo "<li data-date='<?php echo $slider->timeline_slider_date?>'>";
                    }
                    ?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img alt="" src="<?php echo base_url().$slider->timeline_slider_image?>">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2><?php echo $slider->timeline_slider_title?></h2>
                            <em><?php echo $slider->timeline_slider_time?>, <?php echo $slider->timeline_slider_date?></em>
                            <p> 
                                <?php echo $slider->timeline_slider_short_desc?>
                            </p>
                        </div>
                    </li>
               <?php $i++; } ?>
                </ol>
            </div>
            <div class="timeline">
                <div class="events-wrapper">
                    <div class="events">
                        <ol> 
                        <?php
                        $k=1;
                        $all_timeline_slider_date=$this->admin_model->timeline_slider_info();?>
                            <?php foreach($all_timeline_slider_date as $date){?>
                                <?php 
                                    if($k == 1){
                                    echo "<li><a href='#0' data-date='<?php echo $date->timeline_slider_date?>' class='selected'></a></li>";
                                }
                                else {
                                    echo "<li><a href='#0' data-date='<?php echo $date->timeline_slider_date?>'></a></li>";
                                }
                           ?>
                        <?php $k++; } ?>
                        </ol>
                        <span class="filling-line" aria-hidden="true"></span>
                    </div>
                </div>
                <ul class="cd-timeline-navigation">
                    <li><a href="#0" class="prev inactive">Prev</a></li>
                    <li><a href="#0" class="next">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
        
<section class="announcements"><!--row-4 bottom-->
	<div class="container"><!--container-->
    	<h2>Announcements</h2>
		<ul class="ch-grid">
            <?php $all_announcement=$this->admin_model->announcement_info();?>
            <?php foreach($all_announcement as $announcement){?>
			<li>
				<div class="ch-item">
					<div class="ch-info">
						<div class="ch-info-front"><img src="<?php echo base_url().$announcement->announcement_image?>" alt=""></div>
						<div class="ch-info-back">
							<h3><a href="announcements_annual_show.php" style="color: #FFF;"><?php echo $announcement->announcement_title?></a></h3>
							<p><a href="announcements_annual_show.php" style="color: #FFF;"><?php echo $announcement->announcement_short_desc?></a></p>
						</div>
					</div>
				</div>
			</li>
        <?php } ?>

		</ul>
	</div>
</section>

<section class="partner"><!--Begin:Clients-->
    <div class="container">
        <div class="clients">
            <h3>In Collaboration With</h3>
            <div class="our-clients">
                <ul id="flexiselDemo3">
                    <?php $all_collaboration=$this->admin_model->collaboration_info();?>
                    <?php foreach($all_collaboration as $collaboration){?>
                    <li><div class="img-box"><a target="blank" href="<?php echo base_url().$collaboration->collaboration_url?>"><img src="<?php echo base_url().$collaboration->collaboration_image?>"></a></div></li>
                <?php }?>

                </ul>
            </div>
        </div>
    </div>
</section>






