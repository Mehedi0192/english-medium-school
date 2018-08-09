<?php defined('BASEPATH') OR exit('Who are You!');

Class Gallery extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('gallery_model');
	}

	function add_gallery_form()
    {
       $data['admin_main_content']=$this->load->view('banche/pages/add_gallery_form', '', true, array('error' => ' ' ));
        $this->load->view('banche/admin_master', $data);

    }

    private function doupload() {
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
        $_FILES['userfile']['name']=$value['name'][$s];
        $_FILES['userfile']['type']    = $value['type'][$s];
        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
        $_FILES['userfile']['error']       = $value['error'][$s];
        $_FILES['userfile']['size']    = $value['size'][$s];   
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']    = '5000';
            $config['max_width']  = '5000';
            $config['max_height']  = '5000';
        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $name_array[] = $data['file_name'];
            }
            $names= implode(',', $name_array);
            return $names;
    }

     function save_gallery()
    {
        $image=$this->doupload();
        $this->gallery_model->save_gallery($image);
        $this->add_gallery_form();
    }

    function manage_gallery()
    {
    	$data['all_gallery']=$this->gallery_model->all_gallery();
    	 $data['admin_main_content']=$this->load->view('banche/pages/manage_gallery', $data, true);
        $this->load->view('banche/admin_master', $data);

    }

    function delete_gallery($gallery_id)
    {
    	$this->db->where('id', $gallery_id)
    	         ->delete('tbl_gallery');
    	    $this->manage_gallery();
    }

    function view_gallery($gallery_id)
    {
        $this->load->view('header');
        $data['view_gallery']=$this->gallery_model->view_gallery($gallery_id);
        $this->load->view('view_gallery', $data);
        $this->load->view('footer');
    }


}