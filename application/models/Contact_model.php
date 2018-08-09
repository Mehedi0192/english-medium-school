<?php
defined('BASEPATH') OR exit('Who are You');

Class Contact_model extends CI_Model{


function social_network_info()
    {
      $result=$this->db->select('*')->from('tbl_social_network')
                            ->where('social_network_id', 1)
                            ->get()
                            ->row();
                            return $result;
    }

    function save_social_network()
    {
      $data['fb_page']=$this->input->post('fb_page');
      $data['wiki_page']=$this->input->post('wiki_page');
      $data['twitter_page']=$this->input->post('twitter_page');
      $data['insta_page']=$this->input->post('insta_page');
      $data['utube_page']=$this->input->post('utube_page');
      
      $this->db->where('social_network_id', 1)
               ->update('tbl_social_network', $data);
    }










}