
<section class="about-top academics">
    <h2>Academics</h2>
</section>

<section class="academics-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_academics;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="admit-area">
                    <h1>Academics Calender</h1>
                    <div class="table-responsive">
                <table class="table-bordered" width="100%" cellspacing="1" cellpadding="5">
                        <tbody>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Update Date</th>
                                <th>View PDF</th>
                            </tr>
                        <?php $all_calender=$this->calender_model->select_all_calender();?>
                        <?php foreach($all_calender as $calender){?>
                        <tr>
                            <td><b><?php echo $calender->calender_id?></b></td>
                            <td>“<?php echo $calender->calender_title?>”</td>
                            <td><?php echo $calender->date?></td>
                            <td><a href="<?php echo base_url().$calender->calender_pdf?>"><img src="<?php echo base_url()?>assets/images/pdf.jpg"></a></td>
                       </tr>
                         <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
