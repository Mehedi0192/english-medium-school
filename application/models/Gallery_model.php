<?php
defined('BASEPATH') OR exit('Who are You');

Class Gallery_model extends CI_Model{

	function save_gallery($image)
	{
		$data['gallery_image']=$image;
		$data['gallery_title']=$this->input->post('gallery_title', true);
		$data['gallery_desc']=$this->input->post('gallery_desc', true);
		$this->db->insert('tbl_gallery', $data);
	}

function all_gallery()
{
	$result=$this->db->select('*')->from('tbl_gallery')
	                      ->get()
	                      ->result();
	                      return $result;
}


  function view_gallery($gallery_id)
  {
  	$result=$this->db->select('*')->from('tbl_gallery')
  	                      ->where('id', $gallery_id)
  	                      ->get()
  	                      ->row();
  	                      return $result;
  }













}