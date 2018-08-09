<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('result_model');
	}


	 function add_result_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_result_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

      private function upload_result_pdf()
      {
                $config['upload_path']          = './result_pdf/';
                $config['allowed_types']        = 'pdf|csv';
                $config['max_size']             = 5000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('result_pdf'))
                {
                  $data=$this->upload->data();
                  $result_pdf_path="result_pdf/$data[file_name]";
                  return $result_pdf_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
      }
    }

	 function save_result_info()
      {
        $result_pdf=$this->upload_result_pdf();
        $this->result_model->save_result_info($result_pdf);
        $this->add_result_form();
      }

      function manage_result()
      {
      $data=array();
      $data['all_result']=$this->result_model->select_all_result();
      $data['admin_main_content']=$this->load->view('banche/pages/manage_result', $data, true);
      $this->load->view('banche/admin_master', $data);
      }

      function delete_result($delete_result_id)
      {
      	$this->result_model->delete_result($delete_result_id);
      	$this->manage_result();
      }


     public function our_result()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('our_result', $data);
	}
}
