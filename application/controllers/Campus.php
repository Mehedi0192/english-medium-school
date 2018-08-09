<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Campus extends CI_Controller
{

		public function __construct()
		{
			parent::__construct();
      $this->load->model('campus_model');
		}

    function add_campus_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_campus_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

  function save_campus()
  {
    $this->campus_model->save_campus();
    $this->add_campus_form();
  }
  function manage_campus()
  {
    $data=array();
    $data['all_campus']=$this->campus_model->select_all_campus();
    $data['admin_main_content']=$this->load->view('banche/pages/manage_campus', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
  }

 function delete_campus($delete_campus_id)
 {
   $this->campus_model->delete_campus($delete_campus_id);
   $this->manage_campus();
 }

 function campus_info_by_id($campus_id)
 {
    $this->load->view('header');
    $data['news_details']=$this->campus_model->campus_info_by_id($campus_id);
    $this->load->view('campus_details', $data);
    $this->load->view('footer');

 }

  }