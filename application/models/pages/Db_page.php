<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_page extends CI_Model {

    public function fetch_page(){
       return $this->db->get('pages')->result_array();
    }
    public function insert_page($data){
        return $this->db->insert('pages', $data);
    }
}

/* End of file Db_page.php */
