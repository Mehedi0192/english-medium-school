<?php
defined('BASEPATH') OR exit('Who are You');
Class Newsletter_model extends CI_Model{

   function save_newsletter_info($newsletter_pdf)
    {
        //echo "<pre>";
        //print_r($newsletter_pdf);
        $data['newsletter_pdf']=$newsletter_pdf;
        $data['newsletter_title']=$this->input->post('newsletter_title', true);
        $this->db->insert('tbl_newsletter', $data);
    }

    function select_all_newsletter()
    {
      $result=$this->db->select('*')->from('tbl_newsletter')
                            ->get()
                            ->result();
                            return $result;
    }

    function delete_newsletter($delete_newsletter_id)
    {
      $this->db->where('newsletter_id', $delete_newsletter_id)
               ->delete('tbl_newsletter');
    }

}