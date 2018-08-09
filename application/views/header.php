<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>:: Summerfield International School ::</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-theme.min.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/client.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/sinister.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

     <!-- For Timeline -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style-timeline.css">
    <script src="<?php echo base_url()?>assets/js/modernizr.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.4.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.mobile.custom.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script>

</head>

<body>

<div class="nav_wrapper"><!--Begin: Navigation-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
               <?php $manage_logo=$this->admin_model->manage_logo();?>
                <div class="logo-1">
                    <a href="<?php echo base_url()?>"><img src="<?php echo base_url().$manage_logo->main_logo;?>"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class='cssmenu'>
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="home-menu" href="<?php echo base_url()?>pages/about">
                                <img src="<?php echo base_url()?>assets/images/interface/ic-1.png">About Us 
                             </a>
                         </li> 
                        <li>
                            <a class="about-menu" href="<?php echo base_url()?>pages/academics">
                                <img src="<?php echo base_url()?>assets/images/interface/ic-2.png">Academics
                             </a>
                         </li>
                        <li>
                            <a class="gallery-menu" href="<?php echo base_url()?>pages/admission">
                                <img src="<?php echo base_url()?>assets/images/interface/ic-3.png">Admission
                             </a>
                         </li>
                        <li>
                            <a class="add-menu" href="<?php echo base_url()?>pages/carrer">
                                <img src="<?php echo base_url()?>assets/images/interface/ic-4.png">Career
                             </a>
                         </li>
                        <li>
                            <a class="venue-menu" href="<?php echo base_url()?>pages/exam_vanue">
                                <img src="<?php echo base_url()?>assets/images/interface/ic-5.png">Exam Venue
                             </a> 
                         </li>
                        <li>
                            <a class="contact-menu" href="<?php echo base_url()?>pages/contact">
                                <img src="<?php echo base_url()?>assets/images/interface/ic-6.png">Contact Us
                             </a>
                         </li>                                            
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="logo-2">
                    <a href="<?php echo base_url()?>"><img src="<?php echo base_url().$manage_logo->side_logo;?>"></a>
                </div>
            </div>
        </div>
    </div>
</div><!--End: Navigation-->

