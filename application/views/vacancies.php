

<section class="career-top">
    <h2>Career</h2>
</section>

<section class="career-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_carrer;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="glance-area">
                    <h1>Vacancies</h1>
                    <div class="col-lg-4 col-sm-3 col-md-4 col-xs-3"><!--left-->
                        <h2>Why Summerfield School?</h2>
                        <p style="line-height:30px; font-size:14px; text-align: justify;">
                            - Professional environment<br>
                            - Freedom to reach individual goal<br>
                            - Innovative ideas to be flourish<br>
                            - Build Professional Growth<br>
                        </p>
                    </div><!--left-->
                    <div class="col-lg-4 col-sm-3 col-md-4 col-xs-3" style="text-align:right !important;"><!--right-->
                        <h2>How to Join? </h2>
                        <p style="line-height:30px; font-size:14px; text-align: justify;">
                            - Extraordinary coding skills<br>
                            - Dynamic &amp; self motivated<br>
                            - Structured and pro-active<br>
                            - Good team player<br>
                            - Customer centric<br>
                        </p>
                    </div><!--right-->
                    <div class="col-lg-4 col-sm-6 col-md-4 col-xs-3" style="text-align: right !important;"><!--right-->
                        <h2 style="font-size: 21px;">When can enroll? </h2>
                        <p style="line-height:22px; font-size:14px; text-align:justify;">
                            Anytime, Vacancies are desirable to the proper candidates. Please drop your CV to jobs@summerfield-school.com
                        </p>
                    </div><!--right-->
                    <div class="linkpage" style="padding-top:15px;">
                        <table style="font-family:lato; width: 100%; border: 1px solid #CCC;">
                            <tbody><tr>
                                <th style="background:#00A86B; color: #FFF;">Job Title </th>
                                <th style="background:#00A86B; color: #FFF;">Experience</th>
                                <th style="background:#00A86B; color: #FFF;">Salary Range </th>
                                <th style="background:#00A86B; color: #FFF;">Last Date</th>
                                <th style="background:#00A86B; color: #FFF; text-align: center;">Apply Online</th>
                            </tr>  
                         <?php $all_vacancies=$this->career_model->select_all_vacancies();?>  <?php foreach($all_vacancies as $vacancies){?>
                            <tr>
                                <td><?php echo $vacancies->vacancies_title?></td>
                                <td><?php echo $vacancies->vacancies_experiance?></td>
                                <td><?php echo $vacancies->vacancies_salary?></td>
                                <td><?php echo $vacancies->vacancies_date?></td>
                                <td class="apply" align="center"><a data-toggle="modal" data-target="#job-feed">Apply</a></td>
                            </tr>
                        <?php } ?>

                                <div class="modal fade" id="job-feed" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Apply Online</h4>
                                            </div>
                                            <div class="modal-body">

                                         <form action="<?php echo base_url()?>pages/save_apply" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="usr">Job Tittle:</label>
                                                    <input type="text" name="job_title" class="form-control" id="usr">
                                                </div>
                                                <div class="form-group">
                                                    <label for="usr">Name:</label>
                                                    <input type="text" name="name" class="form-control" id="usr">
                                                </div>
                                                <div class="form-group">
                                                    <label for="usr">Email:</label>
                                                    <input type="email" name="email" class="form-control" id="usr">
                                                </div>
                                                <div class="form-group">
                                                    <label for="usr">Message:</label>
                                                    <textarea class="form-control" name="message" id="exampleTextarea" rows="3"></textarea>
                                                </div> 
                                                <div class="form-group">
                                            <label for="usr">Attach your CV:</label>
                                            <input type="file" name="file" style="width: 100%; background:none; border: 0; box-shadow: none; height: 100%; padding: 0; margin-top: 6px;" class="form-control" id="fileAttach" required="" >
                                                </div>

                                                <input type="submit" name="submit" value="SEND"  class="btn btn-cam">

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                            </tr>
                      </tbody></table>
                    </div>	
                </section>
            </div>
        </div>
    </div>
</section>