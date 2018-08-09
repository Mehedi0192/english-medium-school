<?php
defined('BASEPATH') OR exit('Who are You');
Class Result_model extends CI_Model{

   function save_result_info($result_pdf)
    {
        //echo "<pre>";
        //print_r($result_pdf);
        $data['result_pdf']=$result_pdf;
        $data['exam_name']=$this->input->post('exam_name', true);
        $data['class_name']=$this->input->post('class_name', true);
        $this->db->insert('tbl_result', $data);
    }

    function select_all_result()
    {
      $result=$this->db->select('*')->from('tbl_result')
                            ->get()
                            ->result();
                            return $result;
    }

    function delete_result($delete_result_id)
    {
      $this->db->where('result_id', $delete_result_id)
               ->delete('tbl_result');
    }

}