<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('newsletter_model');
	}


	 function add_newsletter_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_newsletter_form', '', true);
      $this->load->view('banche/admin_master', $data);
    }

      private function upload_newsletter_pdf()
      {
                $config['upload_path']          = './newsletter_pdf/';
                $config['allowed_types']        = 'pdf|csv';
                $config['max_size']             = 5000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('newsletter_pdf'))
                {
                  $data=$this->upload->data();
                  $newsletter_pdf_path="newsletter_pdf/$data[file_name]";
                  return $newsletter_pdf_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
      }
    }

	 function save_newsletter_info()
      {
        $newsletter_pdf=$this->upload_newsletter_pdf();
        $this->newsletter_model->save_newsletter_info($newsletter_pdf);
        $this->add_newsletter_form();
      }

      function manage_newsletter()
      {
      $data=array();
      $data['all_newsletter']=$this->newsletter_model->select_all_newsletter();
      $data['admin_main_content']=$this->load->view('banche/pages/manage_newsletter', $data, true);
      $this->load->view('banche/admin_master', $data);
      }

      function delete_newsletter($delete_newsletter_id)
      {
      	$this->newsletter_model->delete_newsletter($delete_newsletter_id);
      	$this->manage_newsletter();
      }


     public function our_newsletter()
	{
		$this->load->view('left_bar');
		$data['header']=$this->load->view('header', '', true);
		$data['footer']=$this->load->view('footer', '', true);
		$this->load->view('our_newsletter', $data);
	}
}
