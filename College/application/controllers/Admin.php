<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');					  
               
    }

    public function index() 
	{
        if($this->session->userdata('admin_login') != 1) redirect(base_url(). 'login', 'refresh');
        if($this->session->userdata('admin_login') == 1) redirect(base_url(). 'admin/dashboard', 'refresh');
    
    }

    function dashboard() {

        if($this->session->userdata('admin_login') != 1) redirect(base_url(). 'login', 'refresh');
        
       	$page_data['page_name'] = 'dashboard';
        $page_data['page_title'] =  get_phrase('Admin Dashboard');
        $this->load->view('backend/index', $page_data);
    }

    function manage_profile($param1 = '', $param2 ='', $param3 =''){






        // continue with your codes

        
        $page_data['page_name'] = 'manage_profile';
        $page_data['page_title'] =  get_phrase('Manage Profile');
        $page_data['edit_profile'] = $this->db->get_where('admin', array('admin_id' => $this->session->userdata('admin_id')))->result_array();
        $this->load->view('backend/index', $page_data);
    }



    




  

}
