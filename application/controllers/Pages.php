<?php 
defined('BASEPATH') OR exit('Who are you!');
Class Pages extends CI_Controller{
	function __construct()
	{
		parent::__construct();
	}

	public function result()
	{
		$this->load->view('header');
		$data['result']=$this->load->view('result', '', true);
		$this->load->view('result', $data);
		$this->load->view('footer');
	}



	public function about()
	{
		$this->load->view('header');
		$data['glance']=$this->load->view('glance', '', true);
		$data['left_about']=$this->load->view('left_about', $data, true);
		$this->load->view('glance', $data);
		$this->load->view('footer');
	}

	public function glance()
	{
		$this->load->view('header');
		$data['left_about']=$this->load->view('left_about', '', true);
		$this->load->view('glance', $data);
		$this->load->view('footer');
	}

	public function our_story()
	{
		$this->load->view('header');
		$data['left_about']=$this->load->view('left_about', '', true);
		$this->load->view('our_story', $data);
		$this->load->view('footer');
	}

	public function message()
	{
		$this->load->view('header');
		$data['left_about']=$this->load->view('left_about', '', true);
		$this->load->view('message', $data);
		$this->load->view('footer');
	}

	public function newsletter()
	{
		$this->load->view('header');
		$data['left_about']=$this->load->view('left_about', '', true);
		$this->load->view('newsletter', $data);
		$this->load->view('footer');
	}

	public function photo_gallery()
	{
		$this->load->view('header');
		$data['left_about']=$this->load->view('left_about', '', true);
		$this->load->view('photo_gallery', $data);
		$this->load->view('footer');
	}


	public function academics()
	{
		$this->load->view('header');
		$data['left_academics']=$this->load->view('left_academics', '', true);
		$this->load->view('our_curriculum', $data);
		$this->load->view('footer');
	}

	public function curriculum()
	{
		$this->load->view('header');
		$data['left_academics']=$this->load->view('left_academics', '', true);
		$this->load->view('our_curriculum', $data);
		$this->load->view('footer');
	}

	public function cambridge_edexcel()
	{
		$this->load->view('header');
		$data['left_academics']=$this->load->view('left_academics', '', true);
		$this->load->view('cambridge_edexcel', $data);
		$this->load->view('footer');
	}

	public function calender()
	{
		$this->load->view('header');
		$data['left_academics']=$this->load->view('left_academics', '', true);
		$this->load->view('calender', $data);
		$this->load->view('footer');
	}

	public function facilities()
	{
		$this->load->view('header');
		$data['left_academics']=$this->load->view('left_academics', '', true);
		$this->load->view('facilities', $data);
		$this->load->view('footer');
	}

	public function faculty()
	{
		$this->load->view('header');
		$data['left_academics']=$this->load->view('left_academics', '', true);
		$this->load->view('faculty', $data);
		$this->load->view('footer');
	}

	public function admission()
	{
		$this->load->view('header');
		$data['left_admission']=$this->load->view('left_admission', '', true);
		$this->load->view('information', $data);
		$this->load->view('footer');
	}

	public function information()
	{
		$this->load->view('header');
		$data['left_admission']=$this->load->view('left_admission', '', true);
		$this->load->view('information', $data);
		$this->load->view('footer');
	}

	public function process()
	{
		$this->load->view('header');
		$data['left_admission']=$this->load->view('left_admission', '', true);
		$this->load->view('process', $data);
		$this->load->view('footer');
	}

		public function form()
	{
		$this->load->view('header');
		$data['left_admission']=$this->load->view('left_admission', '', true);
		$this->load->view('form', $data);
		$this->load->view('footer');
	}

	function save_admission_info()
	{
	$student_name=$this->input->post('student_name', true);
	$student_birth_date=$this->input->post('student_birth_date', true);
    $admission_class=$this->input->post('admission_class', true);
    $preferred_session=$this->input->post('preferred_session', true);
    $preferred_campus=$this->input->post('preferred_campus', true);
    $admission_year=$this->input->post('admission_year', true);
    $guardian_name=$this->input->post('guardian_name', true);
    $guardian_email=$this->input->post('guardian_email', true);
    $guardian_phone=$this->input->post('guardian_phone', true);
    $guardian_qualification=$this->input->post('guardian_qualification', true);
    $guardian_occupation=$this->input->post('guardian_occupation', true);
    $guardian_address=$this->input->post('guardian_address', true);
    $reffered_by=$this->input->post('reffered_by', true);
    $admission_source=$this->input->post('admission_source', true);  

             $s_name=" Student Name :"." ".$student_name."<br>";
             $s_birth_date="Date Of Birth :"." ".$student_birth_date."<br>";
             $a_class="Class :"." ".$admission_class."<br>";
             $p_session="Session :"." ".$preferred_session."<br>";
             $p_campus="Campus :"." ".$preferred_campus."<br>";
             $a_year="Year :"." ".$admission_year."<br>";
             $g_name="Guardian Name :"." ".$guardian_name."<br>";
             $g_email="Email :"." ".$guardian_email."<br>";
             $g_phone="Contact No :"." ".$guardian_phone."<br>";
             $g_qualification="Guardian Qualification :"." ".$guardian_qualification."<br>";
             $g_occupation="Guardian Occupation :"." ".$guardian_occupation."<br>";
             $g_address="Guardian Address :"." ".$guardian_address."<br>";
             $reffered="Refference :"." ".$reffered_by."<br>";
             $a_source="Source :"." ".$admission_source."<br>";
         //Load email library
        $this->load->library('email');

        $to_email='mehedihasan01924629@gmail.com';
        $message=$s_name.$s_birth_date.$a_class.$p_session.$p_campus.$a_year.$g_name.$g_email.$g_phone.$g_qualification.$g_occupation.$g_address.$reffered.$a_source;

        $this->email->from($guardian_email, $student_name );
        $this->email->to($to_email);
        $this->email->subject('New Admission');
        $this->email->message($message);
        //Send mail
        $this->email->send();
        redirect(base_url());
	}


		public function carrer()
	{
		$this->load->view('header');
		$data['left_carrer']=$this->load->view('left_carrer', '', true);
		$this->load->view('how_to_apply', $data);
		$this->load->view('footer');
	}

		public function apply()
	{
		$this->load->view('header');
		$data['left_carrer']=$this->load->view('left_carrer', '', true);
		$this->load->view('how_to_apply', $data);
		$this->load->view('footer');
	}

		public function vacancies()
	{
		$this->load->view('header');
		$data['left_carrer']=$this->load->view('left_carrer', '', true);
		$this->load->view('vacancies', $data);
		$this->load->view('footer');
	}


	function upload_cv()
      {
      	$config['upload_path']          = './cv_pdf/';
                $config['allowed_types']        = 'pdf|csv';
                $config['max_size']             = 5000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('file'))
                {
                  $data=$this->upload->data();
                  $cv_pdf_path="cv_pdf/$data[file_name]";
                  return $cv_pdf_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
      }
          
    }

	function save_apply()
	{
		$cv=$this->upload_cv();
		$job_title=$this->input->post('job_title', true);
		$name=$this->input->post('name', true);
		$email=$this->input->post('email', true);
		$a_message=$this->input->post('message', true);

		     $a_job_title=" Job title :"." ".$job_title."<br>";
             $a_name="Applicant Name :"." ".$name."<br>";
             $a_email="Email :"." ".$email."<br>";
             $ap_message="Message :"." ".$a_message."<br>";

		 //Load email library
        $this->load->library('email');

        $to_email='mehedihasan01924629@gmail.com';
        $message=$a_job_title.$a_name.$a_email.$ap_message;
        $filename=base_url().$cv;
        $this->email->from($email, $name);
        $this->email->to($to_email);
        $this->email->attach($filename);
        $this->email->subject('New Apply');
        $this->email->message($message);
        //Send mail
        $this->email->send();
        redirect(base_url());



	}


		public function exam_vanue()
	{
		$this->load->view('header');
		$this->load->view('exam_vanue');
		$this->load->view('footer');
	}

		public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}


	function contact_us()
	{
	$name=$this->input->post('name', true);
	$email=$this->input->post('email', true);
    $message=$this->input->post('message', true);
  

             $c_name=" Student Name :"." ".$name."<br>";
             $s_email="Date Of Birth :"." ".$email."<br>";
             $c_message="Class :"." ".$message."<br>";

         //Load email library
        $this->load->library('email');

        $to_email='mehedihasan01924629@gmail.com';
        $message=$c_name.$s_email.$c_message;

        $this->email->from($email, $name );
        $this->email->to($to_email);
        $this->email->subject('New Enquery');
        $this->email->message($message);
        //Send mail
        $this->email->send();
        redirect(base_url());
	}






	




}
