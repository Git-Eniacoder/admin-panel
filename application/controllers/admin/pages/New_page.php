<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class New_page extends My_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pages/db_page');
        
    }
    

    public function index()
    {
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/pages/new_page');
        $this->load->view('admin/common/footer');
    }
    public function createpage(){
        $this->form_validation->set_rules('pname', 'Page Name', 'trim|required');
        // $this->form_validation->set_rules('pcontent', 'Page Content', 'required');
        if ($this->form_validation->run()) {
            $data['page_name'] = $this->input->post('pname');
            $data['page_desc'] = $this->input->post('pcontent');
            $data['page_tags'] = $this->input->post('ptags');
            $data['page_url'] = $this->input->post('plink');
            if($this->db_page->insert_page($data)){
                $array = array(
                    'error'   => false,
                    'msg'   => '<p class="text-center text-success">Page Created Successfully</p>',
                   );
            }else{
                $array = array(
                    'errors'   => true,
                    'msg'   => '<p class="text-center text-danger">Error In page Creation</p>',
                   );
            }
        } else {
            $array = array(
                'form'   => true,
                'msg'   => '<p class="text-center text-danger">Please Fill All Fields</p>',
               );
        }
        echo json_encode($array);
    }

}

/* End of file New_page.php */
