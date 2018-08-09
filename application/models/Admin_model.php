<?php
defined('BASEPATH') OR exit('Who are You');

Class Admin_model extends CI_Model{

	function save_logo($main_logo, $side_logo)
	{
		$data['main_logo']=$main_logo;
    $data['side_logo']=$side_logo;
		$this->db->insert('tbl_logo', $data);
	}

	function manage_logo()
	{
		$result=$this->db->select('*')->from('tbl_logo')
		                      ->get()
		                      ->row();
		                      return $result;
	}

	function delete_logo($logo_id)
	{
		$this->db->where('logo_id', $logo_id)
		         ->delete('tbl_logo');
	}

    function add_slider($slider_image)
    {
      $data['slider_image']=$slider_image;
      $data['slider_title']=$this->input->post('slider_title', true);
      $data['slider_short_desc']=$this->input->post('slider_short_desc', true);
      $this->db->insert('tbl_slider', $data);
    }

    function slider_info()
    {
       $result=$this->db->select('*')->from('tbl_slider')
                           ->get()
                           ->result();
                           return $result;      
    }

    function delete_slider_image($slider_id)
    {
      $this->db->where('slider_id', $slider_id)
                ->delete('tbl_slider');
    }



    function add_timeline_slider($timeline_slider_image)
    {
      $data['timeline_slider_image']=$timeline_slider_image;
      $data['timeline_slider_title']=$this->input->post('timeline_slider_title', true);
      $data['timeline_slider_short_desc']=$this->input->post('timeline_slider_short_desc',
       true);
      $data['timeline_slider_date']=$this->input->post('timeline_slider_date', true);
      $data['timeline_slider_time']=$this->input->post('timeline_slider_time', true);
      $this->db->insert('tbl_timeline_slider', $data);
    }

    function timeline_slider_info()
    {
       $result=$this->db->select('*')->from('tbl_timeline_slider')
                           ->get()
                           ->result();
                           return $result;      
    }

    function delete_timeline_slider_image($timeline_slider_id)
    {
      $this->db->where('timeline_slider_id', $timeline_slider_id)
                ->delete('tbl_timeline_slider');
    }


    function add_announcement($announcement_image)
    {
      $data['announcement_image']=$announcement_image;
      $data['announcement_title']=$this->input->post('announcement_title', true);
      $data['announcement_short_desc']=$this->input->post('announcement_short_desc', true);
      $this->db->insert('tbl_announcement', $data);
    }

    function announcement_info()
    {
       $result=$this->db->select('*')->from('tbl_announcement')
                           ->get()
                           ->result();
                           return $result;      
    }

    function delete_announcement($announcement_id)
    {
      $this->db->where('announcement_id', $announcement_id)
                ->delete('tbl_announcement');
    }

    function add_collaboration($collaboration_image)
    {
      $data['collaboration_image']=$collaboration_image;
      $data['collaboration_url']=$this->input->post('collaboration_url', true);
      $this->db->insert('tbl_collaboration', $data);
    }

    function collaboration_info()
    {
       $result=$this->db->select('*')->from('tbl_collaboration')
                           ->get()
                           ->result();
                           return $result;      
    }

    function delete_collaboration_image($collaboration_id)
    {
      $this->db->where('collaboration_id', $collaboration_id)
                ->delete('tbl_collaboration');
    }

    function glance_info()
    {
      $result=$this->db->select('*')->from('tbl_glance')
                            ->where('glance_id', 1)
                            ->get()
                            ->row();
                            return $result;
    }

    function save_glance()
    {
      $data['glance_desc']=$this->input->post('glance_desc', true);
      $this->db->where('glance_id', 1)
               ->update('tbl_glance', $data);
    }

    function history_info()
    {
      $result=$this->db->select('*')->from('tbl_history')
                            ->where('history_id', 1)
                            ->get()
                            ->row();
                            return $result;
    }

    function save_history()
    {
      $data['history_desc']=$this->input->post('history_desc');
      $this->db->where('history_id', 1)
               ->update('tbl_history', $data);
    }

    
    function message_info()
    {
      $result=$this->db->select('*')->from('tbl_message')
                            ->where('message_id', 1)
                            ->get()
                            ->row();
                            return $result;
    }

    function save_message()
    {
      $data['message_desc']=$this->input->post('message_desc');
      $this->db->where('message_id', 1)
               ->update('tbl_message', $data);
    }





























	function save_associations_memberships()
	{
		$data['associations_name']=$this->input->post('associations_name', TRUE);
		$data['associations_url']=$this->input->post('associations_url', TRUE);
		$this->db->insert('tbl_associations', $data);
	}

	function manage_associations_memberships()
	{
		$result=$this->db->select('*')->from('tbl_associations')
		                      ->get()
		                      ->result();
		                      return $result;
	}

		function delete_associations($associations_id)
	{
		$this->db->where('associations_id', $associations_id)
		         ->delete('tbl_associations');
	}



	function save_key_personnel($key_personnel_image)
   {
     $key_personnel_data['key_personnel_image']=$key_personnel_image;
     $key_personnel_data['key_personnel_name']=$this->input->post('key_personnel_name', true);
     $key_personnel_data['key_personnel_designation']=$this->input->post('key_personnel_designation', true);
     $key_personnel_data['key_personnel_email']=$this->input->post('key_personnel_email', true);
     $key_personnel_data['key_personnel_contact_one']=$this->input->post('key_personnel_contact_one', true);
     $key_personnel_data['key_personnel_contact_two']=$this->input->post('key_personnel_contact_two', true);
     $this->db->insert('tbl_key_personnel', $key_personnel_data);
   }

function select_all_key_personnel()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->get()
                            ->result();
                            return $result;
   }

   function key_personnel_info_by_id($key_personnel_id)
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_id', $key_personnel_id)
                            ->get()
                            ->row();
                            return $result;
   }


   function select_key_personnel_ceo()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'CEO')
                            ->get()
                            ->row();
                            return $result;
   }

   function select_key_personnel_executive_director()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'Executive Director')
                            ->get()
                            ->row();
                            return $result;
   }

   function select_key_personnel_general_manager()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'General Manager')
                            ->get()
                            ->row();
                            return $result;
   }

   function select_key_personnel_manager()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'Manager')
                            ->get()
                            ->row();
                            return $result;
   }

    function select_key_personnel_asst_manager()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->where('key_personnel_designation', 'Asst. Manager')
                            ->get()
                            ->result();
                            return $result;
   }
   function select_key_personnel_all_executive()
   {
      $result=$this->db->select('*')->from('tbl_key_personnel')
                            ->limit(20, 6)
                            ->get()
                            ->result();
                            return $result;
   }

    function update_key_personnel($key_personnel_image)
  {
    $data=array();
    
    $key_personnel_id=$this->input->post('key_personnel_id',true);
    $data['key_personnel_name']=$this->input->post('key_personnel_name',true);
    $data['key_personnel_designation']=$this->input->post('key_personnel_designation',true);
    $data['key_personnel_image']=$key_personnel_image;
    $data['key_personnel_email']=$this->input->post('key_personnel_email',true);
    $data['key_personnel_contact_one']=$this->input->post('key_personnel_contact_one',true);
    $data['key_personnel_contact_two']=$this->input->post('key_personnel_contact_two',true);

    $this->db->where('key_personnel_id', $key_personnel_id)
             ->update('tbl_key_personnel', $data);
  }

  function delete_key_personnel($delete_key_personnel_id)
    {
      $this->db->where('key_personnel_id', $delete_key_personnel_id)
                ->delete('tbl_key_personnel');
    }

     function save_product()
   {
    $hproduct_data['a_all_product']=$this->input->post('all_product');
     $this->db->insert('tbl_product', $hproduct_data);
   }

    function save_highlighted_product()
   {
    $hproduct_data['hproduct_name']=$this->input->post('hproduct_name', TRUE);
    $hproduct_data['hproduct_desc']=$this->input->post('hproduct_desc', TRUE);
     $this->db->insert('tbl_hproduct', $hproduct_data);
   }

function select_all_highlighted_product()
   {
      $result=$this->db->select('*')->from('tbl_hproduct')
                            ->get()
                            ->result();
                            return $result;
   }

   function delete_highlighted_product($delete_highlighted_product_id)
    {
      $this->db->where('hproduct_id', $delete_highlighted_product_id)
                ->delete('tbl_hproduct');
    }






}