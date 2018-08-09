<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('career_model');
	}


	 function add_apply_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_apply_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

      private function upload_apply_pdf()
      {
                $config['upload_path']          = './apply_pdf/';
                $config['allowed_types']        = 'pdf|csv';
                $config['max_size']             = 5000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('apply_pdf'))
                {
                  $data=$this->upload->data();
                  $apply_pdf_path="apply_pdf/$data[file_name]";
                  return $apply_pdf_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
      }
    }

	 function save_apply_info()
      {
        $apply_pdf=$this->upload_apply_pdf();
        $this->career_model->save_apply_info($apply_pdf);
        $this->add_apply_form();
      }

      function manage_apply()
      {
      $data=array();
      $data['all_apply']=$this->career_model->select_all_apply();
      $data['admin_main_content']=$this->load->view('banche/pages/manage_apply', $data, true);
      $this->load->view('banche/admin_master', $data);
      }

      function delete_apply($delete_apply_id)
      {
      	$this->career_model->delete_apply($delete_apply_id);
      	$this->manage_apply();
      }


     public function our_apply()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('our_apply', $data);
	}

   function add_vacancies_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_vacancies_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

     function save_vacancies_info()
      {
        $this->career_model->save_vacancies_info();
        $this->add_vacancies_form();
      }

        function manage_vacancies()
      {
      $data=array();
      $data['all_vacancies']=$this->career_model->select_all_vacancies();
      $data['admin_main_content']=$this->load->view('banche/pages/manage_vacancies', $data, true);
      $this->load->view('banche/admin_master', $data);
      }

         function delete_vacancies($delete_vacancies_id)
      {
        $this->career_model->delete_vacancies($delete_vacancies_id);
        $this->manage_vacancies();
      }


}
