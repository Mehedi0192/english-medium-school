<?php
defined('BASEPATH') OR exit('Who are You');
Class Calender_model extends CI_Model{

   function save_calender_info($calender_pdf)
    {
        //echo "<pre>";
        //print_r($calender_pdf);
        $data['calender_pdf']=$calender_pdf;
        $data['calender_title']=$this->input->post('calender_title', true);
        $data['date']=$this->input->post('date', true);
        $this->db->insert('tbl_calender', $data);
    }

    function select_all_calender()
    {
      $result=$this->db->select('*')->from('tbl_calender')
                            ->get()
                            ->result();
                            return $result;
    }

    function delete_calender($delete_calender_id)
    {
      $this->db->where('calender_id', $delete_calender_id)
               ->delete('tbl_calender');
    }

}