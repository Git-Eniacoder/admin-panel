<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_management extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_login');
  
    }

    public function index($data=null)
    {
        
        $test['data'] = $this->db_login->fetch();

        
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/management/admin_management',$test);
        $this->load->view('admin/common/footer');
    }
   
    public function update($id){
        $test['update'] =   $this->db_home->update($id);
        
   
       }
    
    

}

/* End of Admin_management.php */