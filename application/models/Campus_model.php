<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campus_model extends CI_MOdel {


  function save_campus()
   {
     $campus_data['campus_name']=$this->input->post('campus_name', true);
     $campus_data['campus_url']=$this->input->post('campus_url', true);
     $campus_data['campus_desc']=$this->input->post('campus_desc', true);
     $this->db->insert('tbl_campus', $campus_data);
   }


   function select_all_campus()
   {
      $result=$this->db->select('*')->from('tbl_campus')
                            ->get()
                            ->result();
                            return $result;
   }

   function select_all_campus_by_limit()
   {
    $result=$this->db->select('*')->from('tbl_campus')
                          ->order_by('id', 'desc')
                          ->limit(3)
                          ->get()
                          ->result();
                          return $result;
   }

  function delete_campus($delete_campus_id)
    {
      $this->db->where('campus_id', $delete_campus_id)
                ->delete('tbl_campus');
    }



}