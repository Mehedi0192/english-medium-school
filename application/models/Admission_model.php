<?php
defined('BASEPATH') OR exit('Who are You');

Class Admission_model extends CI_Model{



function add_admission_information($admission_information_image)
    {
      $data['admission_information_image']=$admission_information_image;
      $data['admission_information_desc']=$this->input->post('admission_information_desc', true);
      $this->db->insert('tbl_admission_information', $data);
    }

    function admission_information_info()
    {
       $result=$this->db->select('*')->from('tbl_admission_information')
                           ->get()
                           ->row();
                           return $result;      
    }

    function delete_admission_information($admission_information_id)
    {
      $this->db->where('admission_information_id', $admission_information_id)
                ->delete('tbl_admission_information');
    }


   function save_admission_process_info($admission_process_pdf)
    {
        //echo "<pre>";
        //print_r($admission_process_pdf);
        $data['admission_process_pdf']=$admission_process_pdf;
        $data['admission_process_desc']=$this->input->post('admission_process_desc', true);
        $this->db->insert('tbl_admission_process', $data);
    }

    function select_all_admission_process()
    {
      $result=$this->db->select('*')->from('tbl_admission_process')
                            ->get()
                            ->row();
                            return $result;
    }

    function delete_admission_process($delete_admission_process_id)
    {
      $this->db->where('admission_process_id', $delete_admission_process_id)
               ->delete('tbl_admission_process');
    }

    function save_school_brochure_info($school_brochure_pdf)
    {
        //echo "<pre>";
        //print_r($school_brochure_pdf);
        $data['school_brochure_pdf']=$school_brochure_pdf;
        $this->db->insert('tbl_school_brochure', $data);
    }

    function select_all_school_brochure()
    {
      $result=$this->db->select('*')->from('tbl_school_brochure')
                            ->get()
                            ->row();
                            return $result;
    }

    function delete_school_brochure($delete_school_brochure_id)
    {
      $this->db->where('school_brochure_id', $delete_school_brochure_id)
               ->delete('tbl_school_brochure');
    }










}