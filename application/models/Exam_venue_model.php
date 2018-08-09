<?php
defined('BASEPATH') OR exit('Who are You');
Class Exam_venue_model extends CI_Model{

   function save_exam_venue_info()
    {
        $data['exam_venue_location']=$this->input->post('exam_venue_location', true);
        $this->db->insert('tbl_exam_venue', $data);
    }

    function select_all_exam_venue()
    {
      $result=$this->db->select('*')->from('tbl_exam_venue')
                            ->get()
                            ->result();
                            return $result;
    }

    function delete_exam_venue($delete_exam_venue_id)
    {
      $this->db->where('exam_venue_id', $delete_exam_venue_id)
               ->delete('tbl_exam_venue');
    }

}