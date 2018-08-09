<?php
defined('BASEPATH') OR exit('Who are You');

Class Academics_model extends CI_Model{


function curriculam_info()
    {
      $result=$this->db->select('*')->from('tbl_curriculam')
                            ->where('curriculam_id', 1)
                            ->get()
                            ->row();
                            return $result;
    }

    function save_curriculam()
    {
      $data['curriculam_desc']=$this->input->post('curriculam_desc');
      $this->db->where('curriculam_id', 1)
               ->update('tbl_curriculam', $data);
    }

    function cambridge_info()
    {
      $result=$this->db->select('*')->from('tbl_cambridge')
                            ->where('cambridge_id', 1)
                            ->get()
                            ->row();
                            return $result;
    }

    function save_cambridge()
    {
      $data['cambridge_desc']=$this->input->post('cambridge_desc');
      $this->db->where('cambridge_id', 1)
               ->update('tbl_cambridge', $data);
    }

    function facilities_info()
    {
      $result=$this->db->select('*')->from('tbl_facilities')
                            ->where('facilities_id', 1)
                            ->get()
                            ->row();
                            return $result;
    }

    function save_facilities()
    {
      $data['facilities_desc']=$this->input->post('facilities_desc');
      $this->db->where('facilities_id', 1)
               ->update('tbl_facilities', $data);
    }

    function faculty_info()
    {
      $result=$this->db->select('*')->from('tbl_faculty')
                            ->where('faculty_id', 1)
                            ->get()
                            ->row();
                            return $result;
    }

    function save_faculty()
    {
      $data['faculty_desc']=$this->input->post('faculty_desc');
      $this->db->where('faculty_id', 1)
               ->update('tbl_faculty', $data);
    }











}