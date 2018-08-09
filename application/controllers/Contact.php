<?php 
defined('BASEPATH') OR exit('Whow are You!');

Class Contact extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}

  function show_social_network_form()
  {
    $data['social_network_info']=$this->contact_model->social_network_info();
    $data['admin_main_content']=$this->load->view('banche/pages/show_social_network_form', $data, true);
    $this->load->view('banche/admin_master', $data);
  }

    function save_social_network()
    {
      $this->contact_model->save_social_network();
      $this->show_social_network_form();
    }
  

  

    
    




}