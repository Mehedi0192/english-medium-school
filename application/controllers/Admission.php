<?php 
defined('BASEPATH') OR exit('Whow are You!');

Class Admission extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admission_model');
	}

   public function show_admission_information_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_admission_information', '', true);
      $this->load->view('banche/admin_master', $data);
    }

     private function upload_admission_information_image()
   
              {
                $config['upload_path']          = './admission_information/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 1366;
                $config['max_height']           = 419;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('admission_information_image'))
                {
                  $data=$this->upload->data();
                  $image_path="admission_information/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }


  function add_admission_information()
  {

    $admission_information_image=$this->upload_admission_information_image();
    $this->admission_model->add_admission_information($admission_information_image);
    $this->show_admission_information_form();
  }

  function manage_admission_information()
  {
     $data['admission_information_info']=$this->admission_model->admission_information_info();
     $data['admin_main_content']=$this->load->view('banche/pages/manage_admission_information', $data, true);
     $this->load->view('banche/admin_master', $data);

  }

  function delete_admission_information($admission_information_id)
  {
    $this->admission_model->delete_admission_information($admission_information_id);
    $this->manage_admission_information();
  }  


  function add_admission_process_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_admission_process_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

      private function upload_admission_process_pdf()
      {
                $config['upload_path']          = './admission_process_pdf/';
                $config['allowed_types']        = 'pdf|csv';
                $config['max_size']             = 5000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('admission_process_pdf'))
                {
                  $data=$this->upload->data();
                  $admission_process_pdf_path="admission_process_pdf/$data[file_name]";
                  return $admission_process_pdf_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
      }
    }

   function save_admission_process_info()
      {
        $admission_process_pdf=$this->upload_admission_process_pdf();
        $this->admission_model->save_admission_process_info($admission_process_pdf);
        $this->add_admission_process_form();
      }

      function manage_admission_process()
      {
      $data=array();
      $data['all_admission_process']=$this->admission_model->select_all_admission_process();
      $data['admin_main_content']=$this->load->view('banche/pages/manage_admission_process', $data, true);
      $this->load->view('banche/admin_master', $data);
      }

      function delete_admission_process($delete_admission_process_id)
      {
        $this->admission_model->delete_admission_process($delete_admission_process_id);
        $this->manage_admission_process();
      }


     public function our_admission_process()
  {
    $this->load->view('left_bar');
    $data['header']=$this->load->view('header', '', true);
    $data['footer']=$this->load->view('footer', '', true);
    $this->load->view('our_admission_process', $data);
  }

  function add_school_brochure_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_school_brochure_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

      private function upload_school_brochure_pdf()
      {
                $config['upload_path']          = './school_brochure_pdf/';
                $config['allowed_types']        = 'pdf|csv';
                $config['max_size']             = 20000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('school_brochure_pdf'))
                {
                  $data=$this->upload->data();
                  $school_brochure_pdf_path="school_brochure_pdf/$data[file_name]";
                  return $school_brochure_pdf_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
      }
    }

   function save_school_brochure_info()
      {
        $school_brochure_pdf=$this->upload_school_brochure_pdf();
        $this->admission_model->save_school_brochure_info($school_brochure_pdf);
        $this->add_school_brochure_form();
      }

      function manage_school_brochure()
      {
      $data=array();
      $data['all_school_brochure']=$this->admission_model->select_all_school_brochure();
      $data['admin_main_content']=$this->load->view('banche/pages/manage_school_brochure', $data, true);
      $this->load->view('banche/admin_master', $data);
      }

      function delete_school_brochure($delete_school_brochure_id)
      {
        $this->admission_model->delete_school_brochure($delete_school_brochure_id);
        $this->manage_school_brochure();
      }


     public function our_school_brochure()
  {
    $this->load->view('left_bar');
    $data['header']=$this->load->view('header', '', true);
    $data['footer']=$this->load->view('footer', '', true);
    $this->load->view('our_school_brochure', $data);
  }


  

    
    




}