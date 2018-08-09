
<section class="gallery-top">
    <h2>Photo Gallery</h2>
</section>
<section class="gallery-area">
    <div class="container"><!--container-->
         <?php $all_gallery=$this->gallery_model->all_gallery();?>
        <?php foreach($all_gallery as $gallery){?>
        <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12">
            <div class="blog-post">
                <div class="ImageWrapper ContentWrapperAl chrome-fix">

                    <?php  $list = explode(",", $gallery->gallery_image); ?>

                    <img class="img-responsive" src="<?php echo base_url().'/uploads/'.$list[0];?>" alt="">
                    <div class="ContentAl">
                        <div class="Content">
                            <h2 style="text-align:center; color:#2A3483; font-weight:600; margin-top:10px; font-size:20px; text-decoration:none;"><?php echo $gallery->gallery_title?></h2>
                            <p style="font-family: lato; text-align:center; line-height:22px; font-size:16px; color:#000000; text-decoration:none;"><?php echo $gallery->gallery_desc?></p>
                            <h6 style="text-align:center;margin-top:25px;"><a href="<?php echo base_url("gallery/view_gallery/$gallery->id")?>" ><button type="button" class="btn btn-danger">View All</button></a></h6>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div style="height:40px;"></div>
        </div>
         <?php  } ?>
    </div>
</section>			