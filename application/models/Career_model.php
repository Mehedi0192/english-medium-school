<?php
defined('BASEPATH') OR exit('Who are You');
Class Career_model extends CI_Model{

   function save_apply_info($apply_pdf)
    {
        //echo "<pre>";
        //print_r($apply_pdf);
        $data['apply_pdf']=$apply_pdf;
        $data['apply_title']=$this->input->post('apply_title', true);
        $data['apply_desc']=$this->input->post('apply_desc', true);
        $this->db->insert('tbl_apply', $data);
    }

    function select_all_apply()
    {
      $result=$this->db->select('*')->from('tbl_apply')
                            ->get()
                            ->row();
                            return $result;
    }

    function delete_apply($delete_apply_id)
    {
      $this->db->where('apply_id', $delete_apply_id)
               ->delete('tbl_apply');
    }

     function save_vacancies_info()
    {
        $data['vacancies_title']=$this->input->post('vacancies_title', true);
        $data['vacancies_experiance']=$this->input->post('vacancies_experiance', true);
        $data['vacancies_salary']=$this->input->post('vacancies_salary', true);
        $data['vacancies_date']=$this->input->post('vacancies_date', true);
        $this->db->insert('tbl_vacancies', $data);
    }

       function select_all_vacancies()
    {
      $result=$this->db->select('*')->from('tbl_vacancies')
                            ->get()
                            ->result();
                            return $result;
    }

    function delete_vacancies($delete_vacancies_id)
    {
      $this->db->where('vacancies_id', $delete_vacancies_id)
               ->delete('tbl_vacancies');
    }

}