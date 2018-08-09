<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {

            //Execute the slideShow
            slideShow();

        });

        function slideShow() {

            //Set the opacity of all images to 0
            $('#gallery a').css({opacity: 0.0});

            //Get the first image and display it (set it to full opacity)
            $('#gallery a:first').css({opacity: 1.0});

            //Set the caption background to semi-transparent
            $('#gallery .caption').css({opacity: 0.7});

            //Resize the width of the caption according to the image width
            $('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});

            //Get the caption of the first image from REL attribute and display it
            $('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
                .animate({opacity: 0.7}, 400);

            //Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
            setInterval('gallery()',10000);

        }

        function gallery() {

            //if no IMGs have the show class, grab the first image
            var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

            //Get next image, if it reached the end of the slideshow, rotate it back to the first image
            var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));

            //Get next image caption
            var caption = next.find('img').attr('rel');

            //Set the fade in effect for the next image, show class has higher z-index
            next.css({opacity: 0.0})
                .addClass('show')
                .animate({opacity: 1.0}, 1000);

            //Hide the current image
            current.animate({opacity: 0.0}, 1000)
                .removeClass('show');

            //Set the opacity to 0 and height to 1px
            $('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });

            //Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
            $('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '50px'},500 );

            //Display the content
            $('#gallery .content').html(caption);


        }

    </script>
    <style type="text/css">
        body{
            font-family:arial
        }

        .clear {
            clear:both
        }

        #gallery {
            position:relative;
            height:220px;
        }
        #gallery a {
            float:left;
            position:absolute;
        }

        #gallery a img {
            border:none;
        }

        #gallery a.show {
            z-index:500
        }

        #gallery .caption {
            z-index:600;
            margin:0 0 0 15px;
            background-color:#000;
            color:#ffffff;
            height:50px;
            width:100%;
            font-family:Verdana, Geneva, sans-serif;
            font-size:16px;
            position:absolute;
            bottom:0;
        }

        #gallery .caption .content {
            margin:5px
        }

        #gallery .caption .content h3 {
            margin:0;
            padding:0;
            color:#1DCCEF;
        }


    </style>

    <?php include ('secure-panel/dbconnect.php') ?>

    <?php include ('include/head.php') ?>




</head>

<body>
<div class="wrapper"> <!--wrapper-->
    <div class="main"> <!--main-->
        <div class="header"> <!--header-->

            <?php include ('include/logo.php') ?>

        </div><!--end header-->

        <div class="top_text_animation">  <!--top_text_animation-->

            <?php include ('include/topanimation.php') ?>

        </div>   <!--end top_text_animation-->

        <div class="banner">    <!-- banner-->
            <?php include('include/banner.php'); ?>
        </div>   <!--end banner-->

        <div class="menu">  <!--menu-->

            <nav>

                <?php include ('include/menu.php') ?>

            </nav>

        </div> <!--end menu-->




        <div style="border: 0px solid #000; float:left; width:240px; height:230px; padding:0 0 10px 0; margin: 0 0 0 35px;">  <!--our_wing-->

            <div class="calender"><!-- calender-->
                <h6>Events Calender</h6>
                <div class="calender_box" >
                    <a href="School Calender-1.pdf">
                        <img src="images/calendar.jpg" />
                    </a>

                    <br />

                    <div class="class_task"> <h4><a href="class.php"> Home Work</a></h4> </div>

                </div>


            </div>  <!-- end calender-->

        </div>   <!--end our_wing-->



        <div class="even_calender" style="width:280px; height: 300px ; border: 0px solid #CC0;">   <!--even_calender-->
            <div class="calender"><!-- calender-->
                <h6>Upcoming Events</h6>









                <div style="width:100%; float:left; height:10px;">&nbsp;</div>

                <marquee direction="up" scrolldelay="150" onmouseover="stop();" onmouseout="start();" style="border: 0px solid #F00; height: 240px;">
                    <?php

                    $select = "select * from latestnews where upcomingNews='upcomingEvents' order by id desc 

limit 8";
                    $query = mysql_query($select) or die (mysql_error());
                    while($fetch = mysql_fetch_array($query)){

                        if($fetch['logo'] == 'Summer Field'){
                            $imageName = 'summerLogo.png';
                        }else if($fetch['logo'] == 'Tiny Tots'){
                            $imageName = 'tinyLogo.png';
                        }


                        ?>



                        <div style="width:280px; float:left; height:100px; border: 0px dashed #000;">
                            <div style="width:33%; padding-left:2%; padding:2%; float:left">&nbsp; <img src="images/<?php print $imageName; ?>" width="78" height="56" /></div>
                            <div style="width:40%; float:left; border: 0px solid #333333;">
                                <div style="width:100%; float:left; font-family:Tahoma, Geneva, sans-serif; font-size:12px;"><?php print $fetch['headline']; ?></div>

                                <div style="width:100%; float:left; height:40px; font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#900;">
                                    <a href="LatestNews.php?action=detailsNews&id=<?php print $fetch['0']; ?>" style="color:#900">Details</a>
                                </div>
                            </div>
                        </div>


                    <?php } ?>
                </marquee>

                <a href="allupcoming.php" style="padding-left: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color:#333333;

text-decoration: none;">&raquo;  View All</a>



            </div>  <!--end body-->


        </div>  <!-- end calender-->




        <div class="school_top_news" style="border: 0px solid #000;">  <!--school_top_news-->
            <div class="school_brochure"> <h4><a href="images/b.pdf"> School Brochure</a></h4> </div>

            <div class="latest_result"> <h4><a href="LatestResult.php">Latest Result</a></h4> </div>

            <div class="admi_info"> <h4><a href="information.php"> Admission Info</a></h4> </div>

            <div class="psf"> <h4><a href="psf.php"> Parent Satisfaction Form </a></h4> </div>

        </div>      <!--end school_top_news-->

    </div>  <!--end even_calender-->


    <!-- end middle_welcome_row-->


    <div class="middle_welcome_row">   <!--middle_welcome_row-->

        <?php include ('include/subpart.php') ?>

    </div>   <!--end middle_welcome_row-->



    <div class="line_row">  </div>

    <div class="footer">   <!--footer-->

        <?php include ('include/footer.php') ?>

    </div>  <!--end footer-->


</div>  <!--end middle_portion-->

</div> <!--end main-->
</div> <!--end wrapper-->

</body>
</html>