<section class="contact-top">
    <h2>Contact With Us</h2>
</section>
<section class="contact-area">
    <div class="container">
        <div class="col-md-6">
			<h3>Please fill this form or Using information on the right</h3>
			<p>
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
			</p>
			<div class="clear">
				<h3>Social Network</h3>
                <?php $social_network_info=$this->contact_model->social_network_info();?>
                <ul>
                    <li><a target="blank" href="<?php echo $social_network_info->fb_page?>"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a target="blank" href="<?php echo $social_network_info->wiki_page?>"><i class="fab fa-google" aria-hidden="true"></i></a></li>
                    <li><a target="blank" href="<?php echo $social_network_info->twitter_page?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="<?php echo $social_network_info->insta_page?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a target="blank" href="<?php $social_network_info->utube_page?>"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </div>

			<div class="clear">
                <h3>Contact Us</h3>
                <form action="<?php echo base_url()?>pages/contact_us" method="post" id="form">
                    <div class="controls controls-row">
                        <input id="name" name="name" class="col-lg-9 col-sm-12 col-xs-9 inputpadding" style="padding:8px; width:100%" placeholder="Name" type="text"><br><br>
                        <input id="email" name="email" class="col-lg-9 col-sm-12 col-xs-9 inputpadding" style="padding:8px; width:100%" placeholder="Email" type="email"><br><br>
                        
                        <textarea id="message" rows="5" name="message" class="col-lg-12 col-sm-12 col-xs-12 inputpadding" style="padding:8px;" placeholder="Message"></textarea><br><br>
                        <input name="submit" value="Send Your Inquiry" class="btn btn-primary inputpadding" id="submitbutton" type="submit">
                    </div>
                </form>
            </div>

        </div>
        <div class="col-md-6">
        	<div class="tab-down-drop">
                <?php $all_campus=$this->campus_model->select_all_campus();?>
                <?php foreach($all_campus as $campus){?>
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    <?php echo $campus->campus_name?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <p><iframe src="<?php echo $campus->campus_url?>" style="border:0" width="100%" height="130" frameborder="0"></iframe><br>
                       <?php echo $campus->campus_desc?>
                    </div>
                </div>
            <?php } ?>

            </div>
        </div>
    </div>
</section>		