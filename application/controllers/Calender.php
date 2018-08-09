<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calender extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('calender_model');
	}


	 function add_calender_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_calender_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

      private function upload_calender_pdf()
      {
                $config['upload_path']          = './calender_pdf/';
                $config['allowed_types']        = 'pdf|csv';
                $config['max_size']             = 5000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('calender_pdf'))
                {
                  $data=$this->upload->data();
                  $calender_pdf_path="calender_pdf/$data[file_name]";
                  return $calender_pdf_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
      }
    }

	 function save_calender_info()
      {
        $calender_pdf=$this->upload_calender_pdf();
        $this->calender_model->save_calender_info($calender_pdf);
        $this->add_calender_form();
      }

      function manage_calender()
      {
      $data=array();
      $data['all_calender']=$this->calender_model->select_all_calender();
      $data['admin_main_content']=$this->load->view('banche/pages/manage_calender', $data, true);
      $this->load->view('banche/admin_master', $data);
      }

      function delete_calender($delete_calender_id)
      {
      	$this->calender_model->delete_calender($delete_calender_id);
      	$this->manage_calender();
      }


     public function our_calender()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('our_calender', $data);
	}
}
