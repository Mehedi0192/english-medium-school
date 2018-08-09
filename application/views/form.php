
<section class="addmission-top">
    <h2>Admission</h2>
</section>

<section class="addmission-nav">
	<div class="container">
        <div class="row">
            <?php echo $left_admission;?>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <section class="admit-area">
                    <h1>Admission Form</h1>
                    <div class="online-form">
                        <div class="form-box-line">
                            <h3>Online Addmission Form</h3>
                            <h5>Enter details so a member of staff can contact you for next steps. All data is confidential.</h5>
                            &nbsp
                            <div class="own-form">
                                <h2>Your Info:</h2>
                                <form action="<?php echo base_url()?>pages/save_admission_info" method="post" accept-charset="utf-8">
                                <div class="form-liner">
                                    <div class="form-group">
                                        <label for="name">Name of Prospective Student <span></span></label>
                                        <input name="student_name" type="text" class="form-control" id="name" placeholder="Full Name" important>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Date of Birth <span></span></label>
                                        <input name="student_birth_date" type="date" class="form-control" id="age" placeholder="Age">
                                    </div>
                                </div>
                                <div class="form-liner">
                                    <div class="form-group">
                                        <label>Seeking Admission for <span></span></label>
                                        <select name="admission_class">
                                            <option value="JPG">JPG	</option>
                                            <option value="SPG">SPG </option>
                                            <option value="Nursery">Nursery	</option>
                                            <option value="KG">KG I</option>
                                            <option value="KG II">KG II</option>
                                            <option value="Class I">Class I</option>
                                            <option value="Class II">Class II</option>
                                            <option value="Class III">Class III</option>
                                            <option value="Class IV">Class IV</option>
                                            <option value="Class V">Class V</option>
                                            <option value="Class VI">Class VI</option>
                                            <option value="Class VII">Class VII</option>
                                            <option value="Class VIII">Class VIII</option>
                                            <option value="Class IX">Class IX</option>
                                            <option value="Class X">Class X</option>
                                            <option value="A’Level">A’Level</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Preferred Session<span></span></label>
                                        <select name="preferred_session">
                                            <option value="July-June">July-June</option>
                                            <option value="Jan-Dec">Jan-Dec</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-liner">
                                    <div class="form-group">
                                        <label>Preferred Campus <span></span></label>
                                        <select name="preferred_campus">
                                            <option value="Mohammadpur">Mohammadpur</option>
                                            <option value="Dhanmondi">Dhanmondi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Preferred Year of Admission<span></span></label>
                                        <input name="admission_year" type="date" class="form-control" id="name" placeholder="Year">
                                    </div>
                                </div>
                            </div>
                            <div class="own-form">
                                <h2>Gurdian Info:</h2>
                                <div class="form-liner">
                                    <div class="form-group">
                                        <label for="name">Parents/Guardians Name<span></span></label>
                                        <input name="guardian_name" type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Parents/Guardians Email Address<span>*</span></label>
                                        <input name="guardian_email" type="email" class="form-control" id="age" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-liner">
                                    <div class="form-group">
                                        <label for="age">Parents/Guardians Phone Number<span></span></label>
                                        <input name="guardian_phone" type="text" class="form-control" id="age" placeholder="Gurdian's Contact Number" important>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Parents/Guardians Educational Qualification<span></span></label>
                                        <input name="guardian_qualification" type="text" class="form-control" id="age" placeholder="Educational Qualification">
                                    </div>
                                </div>
                                <div class="form-liner">
                                    <div class="form-group">
                                        <label for="age">Parents/Guardians Occupation <span></span></label>
                                        <input name="guardian_occupation" type="text" class="form-control" id="age" placeholder="Ocupation">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Current Residential Address <span></span></label>
                                        <input name="guardian_address" type="text" class="form-control" id="age" placeholder="Address" important>
                                    </div>
                                </div>
                                <div class="form-liner">
                                    <div class="form-group">
                                        <label for="age">Referred by: (name, contact number, designation)<span></span></label>
                                        <input name="reffered_by" type="text" class="form-control" id="age" placeholder="Refferer">
                                    </div>
                                    <div class="form-group">
                                        <label>Where did you hear about the school<span></span></label>
                                        <select name="admission_source">
                                            <option value="Website">Website</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Alumni">Alumni</option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Word of Mouth">Word of Mouth</option>
                                            <option value="Newspaper">Newspaper</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" name="submit" class="btn btn-info">
                            </div>
                            
                        </div>
                    </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>