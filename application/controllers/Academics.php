<?php 
defined('BASEPATH') OR exit('Whow are You!');

Class Academics extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('academics_model');
	}

  function show_curriculam_form()
  {
    $data['curriculam_info']=$this->academics_model->curriculam_info();
    $data['admin_main_content']=$this->load->view('banche/pages/show_curriculam_form', $data, true);
    $this->load->view('banche/admin_master', $data);
  }

    function save_curriculam()
    {
      $this->academics_model->save_curriculam();
      $this->show_curriculam_form();
    }

    function show_cambridge_form()
  {
    $data['cambridge_info']=$this->academics_model->cambridge_info();
    $data['admin_main_content']=$this->load->view('banche/pages/show_cambridge_form', $data, true);
    $this->load->view('banche/admin_master', $data);
  }

    function save_cambridge()
    {
      $this->academics_model->save_cambridge();
      $this->show_cambridge_form();
    }

    function show_facilities_form()
  {
    $data['facilities_info']=$this->academics_model->facilities_info();
    $data['admin_main_content']=$this->load->view('banche/pages/add_facilities_form', $data, true);
    $this->load->view('banche/admin_master', $data);
  }

   function save_facilities()
    {
      $this->academics_model->save_facilities();
      $this->show_faculty_form();
    }   

    function show_faculty_form()
  {
    $data['faculty_info']=$this->academics_model->faculty_info();
    $data['admin_main_content']=$this->load->view('banche/pages/show_faculty_form', $data, true);
    $this->load->view('banche/admin_master', $data);
  }

   function save_faculty()
    {
      $this->academics_model->save_faculty();
      $this->show_faculty_form();
    }

  

  

    
    




}