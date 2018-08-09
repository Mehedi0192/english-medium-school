<?php 
defined('BASEPATH') OR exit('Whow are You!');

Class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!isset($this->session->admin_id) && ($this->session->user_role != 1))
		{
			redirect('banche');
		}
		$this->load->model('admin_model');
	}

	public function home()
	{
		$data['admin_main_content']=$this->load->view('banche/pages/home', '', true);
		$this->load->view('banche/admin_master', $data);
	}

	public function add_logo_form()
	{
		$data['admin_main_content']=$this->load->view('banche/pages/add_logo_form', '', true);
		$this->load->view('banche/admin_master', $data);

	}

	private function upload_main_logo()
              {
                $config['upload_path']          = './logo_folder/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 215;
                $config['max_height']           = 50;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('main_logo'))
                {
                  $data=$this->upload->data();
                  $image_path="logo_folder/$data[file_name]";
                  return $image_path;
                  //echo $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($error);
                }
      }

      private function upload_side_logo()
              {
                $config['upload_path']          = './logo_folder/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 160;
                $config['max_height']           = 45;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('side_logo'))
                {
                  $data=$this->upload->data();
                  $image_path="logo_folder/$data[file_name]";
                  return $image_path;
                  //echo $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($error);
                }
      }


	function save_logo()
	{
		$main_logo=$this->upload_main_logo();
    $side_logo=$this->upload_side_logo();
		$this->admin_model->save_logo($main_logo, $side_logo);
		$this->add_logo_form();
	}

	function manage_logo()
	{
		$data['manage_logo']=$this->admin_model->manage_logo();
		$data['admin_main_content']=$this->load->view('banche/pages/manage_logo', $data, true);
		$this->load->view('banche/admin_master', $data);
	}

	function delete_logo($logo_id)
    {
    	$this->admin_model->delete_logo($logo_id);
    	$this->manage_logo();
    }

    public function show_slider_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_slider', '', true);
      $this->load->view('banche/admin_master', $data);
    }

     private function upload_slider_image()
   
              {
                $config['upload_path']          = './slider/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 1174;
                $config['max_height']           = 481;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('slider_image'))
                {
                  $data=$this->upload->data();
                  $image_path="slider/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }


  function add_slider()
  {

    $slider_image=$this->upload_slider_image();
    $this->admin_model->add_slider($slider_image);
    $this->show_slider_form();
  }

  function manage_slider_image()
  {
     $data['slider_info']=$this->admin_model->slider_info();
     $data['admin_main_content']=$this->load->view('banche/pages/manage_slider_image', $data, true);
     $this->load->view('banche/admin_master', $data);

  }

  function delete_slider_image($slider_id)
  {
    $this->admin_model->delete_slider_image($slider_id);
    $this->manage_slider_image();
  }



    public function show_timeline_slider_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_timeline_slider', '', true);
      $this->load->view('banche/admin_master', $data);
    }

     private function upload_timeline_slider_image()
   
              {
                $config['upload_path']          = './timeline_slider/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 2000;
                $config['max_height']           = 1000;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('timeline_slider_image'))
                {
                  $data=$this->upload->data();
                  $image_path="timeline_slider/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($error);
                }

      }


  function add_timeline_slider()
  {
    $timeline_slider_image=$this->upload_timeline_slider_image();
    $this->admin_model->add_timeline_slider($timeline_slider_image);
    $this->show_timeline_slider_form();
  }

  function manage_timeline_slider_image()
  {
     $data['timeline_slider_info']=$this->admin_model->timeline_slider_info();
     $data['admin_main_content']=$this->load->view('banche/pages/manage_timeline_slider_image', $data, true);
     $this->load->view('banche/admin_master', $data);

  }

  function delete_timeline_slider_image($timeline_slider_id)
  {
    $this->admin_model->delete_timeline_slider_image($timeline_slider_id);
    $this->manage_timeline_slider_image();
  }

   public function show_announcement_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_announcement', '', true);
      $this->load->view('banche/admin_master', $data);
    }

     private function upload_announcement_image()
   
              {
                $config['upload_path']          = './announcement/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 346;
                $config['max_height']           = 346;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('announcement_image'))
                {
                  $data=$this->upload->data();
                  $image_path="announcement/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }


  function add_announcement()
  {

    $announcement_image=$this->upload_announcement_image();
    $this->admin_model->add_announcement($announcement_image);
    $this->show_announcement_form();
  }

  function manage_announcement()
  {
     $data['announcement_info']=$this->admin_model->announcement_info();
     $data['admin_main_content']=$this->load->view('banche/pages/manage_announcement', $data, true);
     $this->load->view('banche/admin_master', $data);

  }

  function delete_announcement($announcement_id)
  {
    $this->admin_model->delete_announcement($announcement_id);
    $this->manage_announcement();
  }


  public function show_collaboration_form()
    {
      $data=array();
      $data['admin_main_content']=$this->load->view('banche/pages/add_collaboration', '', true);
      $this->load->view('banche/admin_master', $data);
    }

     private function upload_collaboration_image()
   
              {
                $config['upload_path']          = './collaboration/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 222;
                $config['max_height']           = 60;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('collaboration_image'))
                {
                  $data=$this->upload->data();
                  $image_path="collaboration/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }


  function add_collaboration()
  {

    $collaboration_image=$this->upload_collaboration_image();
    $this->admin_model->add_collaboration($collaboration_image);
    $this->show_collaboration_form();
  }

  function manage_collaboration_image()
  {
     $data['collaboration_info']=$this->admin_model->collaboration_info();
     $data['admin_main_content']=$this->load->view('banche/pages/manage_collaboration_image', $data, true);
     $this->load->view('banche/admin_master', $data);

  }

  function delete_collaboration_image($collaboration_id)
  {
    $this->admin_model->delete_collaboration_image($collaboration_id);
    $this->manage_collaboration_image();
  }


  function show_glance_form()
  {
    $data['glance_info']=$this->admin_model->glance_info();
    $data['admin_main_content']=$this->load->view('banche/pages/show_glance_form', $data, true);
    $this->load->view('banche/admin_master', $data);
  }

    function save_glance()
    {
      $this->admin_model->save_glance();
      $this->show_glance_form();
    }

    function show_history_form()
  {
    $data['history_info']=$this->admin_model->history_info();
    $data['admin_main_content']=$this->load->view('banche/pages/show_history_form', $data, true);
    $this->load->view('banche/admin_master', $data);
  }

    function save_history()
    {
      $this->admin_model->save_history();
      $this->show_history_form();
    }

     function show_message_form()
  {
    $data['message_info']=$this->admin_model->message_info();
    $data['admin_main_content']=$this->load->view('banche/pages/show_message_form', $data, true);
    $this->load->view('banche/admin_master', $data);
  }

    function save_message()
    {
      $this->admin_model->save_message();
      $this->show_message_form();
    }
  



















    function add_associations_memberships_form()
    {
    $data['admin_main_content']=$this->load->view('banche/pages/add_associations_memberships_form', '', true);
	$this->load->view('banche/admin_master', $data);
    }

    function save_associations_memberships()
    {
    	$this->admin_model->save_associations_memberships();
    	$this->add_associations_memberships_form();
    }

    function manage_associations_memberships()
    {
    	$data['manage_associations_memberships']=$this->admin_model->manage_associations_memberships();
		$data['admin_main_content']=$this->load->view('banche/pages/manage_associations_memberships', $data, true);
		$this->load->view('banche/admin_master', $data);
    }

    function delete_associations($associations_id)
    {
    	$this->admin_model->delete_associations($associations_id);
    	$this->manage_associations_memberships();
    }

    function add_key_personnel_form()
    {
    $data['admin_main_content']=$this->load->view('banche/pages/add_key_personnel_form', '', true);
	$this->load->view('banche/admin_master', $data);
    }

   private function upload_key_personnel_image()
              {
                $config['upload_path']          = './key_personnel/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('key_personnel_image'))
                {
                  $data=$this->upload->data();
                  $image_path="key_personnel/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }


  function save_key_personnel()
  {
    $key_personnel_image=$this->upload_key_personnel_image();
    $this->admin_model->save_key_personnel($key_personnel_image);
    $this->add_key_personnel_form();
  }
  function manage_key_personnel()
  {
    $data=array();
    $data['all_key_personnel']=$this->admin_model->select_all_key_personnel();
    $data['admin_main_content']=$this->load->view('banche/pages/manage_key_personnel', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
  }

  function edit_key_personnel($key_personnel_id)
 {
    $data['key_personnel_info']=$this->admin_model->key_personnel_info_by_id($key_personnel_id);
    $data['admin_main_content']=$this->load->view('banche/pages/edit_key_personnel_form', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
 }


    function update_key_personnel()
 {
   //echo '<pre>';
   //print_r($_FILES);
   if($_FILES['key_personnel_image']['name']=='' || $_FILES['key_personnel_image']['size']=='')
   {

    $key_personnel_image=$this->input->post('old_image',true);

    $this->admin_model->update_key_personnel($key_personnel_image);

    $data=array();
    $key_personnel_id=$this->input->post('key_personnel_id', true);
    //redirect('edit-key-personnel/'.$key_personnel_id);
     $this->manage_key_personnel();

   }
   else
   {
    $key_personnel_image=$this->upload_key_personnel_image();
    $this->admin_model->update_key_personnel($key_personnel_image);

    unlink($this->input->post('old_image',true));

    $data=array();
    $key_personnel_id=$this->input->post('key_personnel_id', true);
    $this->manage_key_personnel();
    //redirect('edit-key-personnel/'.$key_personnel_id);
   }
 }

 function delete_key_personnel($delete_key_personnel_id)
 {
   $this->admin_model->delete_key_personnel($delete_key_personnel_id);
   $this->manage_key_personnel();
 }
  function add_product_form()
 {
  $data['admin_main_content']=$this->load->view('banche/pages/add_product_form', '', true);
  $this->load->view('banche/admin_master', $data);
 }

 function save_product()
  {
    $this->admin_model->save_product();
    $this->add_product_form();
  }

 function add_highlighted_product_form()
 {
  $data['admin_main_content']=$this->load->view('banche/pages/add_highlighted_product_form', '', true);
  $this->load->view('banche/admin_master', $data);
 }

 function save_highlighted_product()
  {
    $this->admin_model->save_highlighted_product();
    $this->add_highlighted_product_form();
  }
  function manage_highlighted_product()
  {
    $data=array();
    $data['all_highlighted_product']=$this->admin_model->select_all_highlighted_product();
    $data['admin_main_content']=$this->load->view('banche/pages/manage_highlighted_product', $data, TRUE);
    $this->load->view('banche/admin_master', $data);
  }
  function delete_highlighted_product($delete_highlighted_product_id)
  {
    $this->admin_model->delete_highlighted_product($delete_highlighted_product_id);
    $this->manage_highlighted_product();
  }


}