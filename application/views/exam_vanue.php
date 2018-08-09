

<section class="venue-top">
    <h2>Exam Venue</h2>
</section>
<section class="venue-area">
    <div class="container">
        <h3><i class="fa fa-hand-o-right"></i>Our Exam's Locations:</h3>
        <?php $all_venue=$this->exam_venue_model->select_all_exam_venue();?>
          <?php foreach($all_venue as $venue){?>
        <h5>
        <b><?php echo $venue->exam_venue_location?></b><br>
        </h5>
    <?php } ?>
    </div>
</section>

				