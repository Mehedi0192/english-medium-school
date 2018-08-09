<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam_venue extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('exam_venue_model');
	}


	 function add_exam_venue_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_exam_venue_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

	 function save_exam_venue_info()
      {
        $this->exam_venue_model->save_exam_venue_info();
        $this->add_exam_venue_form();
      }

      function manage_exam_venue()
      {
      $data=array();
      $data['all_exam_venue']=$this->exam_venue_model->select_all_exam_venue();
      $data['admin_main_content']=$this->load->view('banche/pages/manage_exam_venue', $data, true);
      $this->load->view('banche/admin_master', $data);
      }

      function delete_exam_venue($delete_exam_venue_id)
      {
      	$this->exam_venue_model->delete_exam_venue($delete_exam_venue_id);
      	$this->manage_exam_venue();
      }


     public function our_exam_venue()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('our_exam_venue', $data);
	}
}
