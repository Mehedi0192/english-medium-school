<section class="venue-top">
    <h2>Result</h2>
</section>
<section class="venue-area">
    <div class="container">
        <div class="result-area">
            <div class="table-responsive">
                <table class="table-bordered" width="100%" cellspacing="1" cellpadding="5">
                    <tbody>
                        <tr>
                            <th>No.</th>
                            <th>Exam Name</th>
                            <th>Class</th>
                            <th>PDF Result Shit</th>
                        </tr>
                        <?php $all_result=$this->result_model->select_all_result();?>
                        <?php foreach($all_result as $result){?>
                        <tr>
                            <td><b><?php echo $result->result_id?></b></td>
                            <td><?php echo $result->exam_name?></td>
                            <td><?php echo $result->class_name?></td>
                            <td><a href="<?php echo base_url().$result->result_pdf?>"><img src="<?php echo base_url()?>assets/images/pdf.jpg?>"></a></td>
                        </tr>
                    <?php } ?>
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>			