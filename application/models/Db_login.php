<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_login extends CI_Model {

    public function login_check($data){
        $array = array('user_email'=>$data['email'],'user_pass'=>md5($data['password']));
        return $this->db->where($array)->get('admin_user')->row_array();

    }

    public function fetch($id){
        $data =  $this->db->where('user_id',$id)->get('admin_user')->row_array();
          return $data ;
      }

      public function insert_update($id,$data){
        return $this->db->where('user_id',$id)->UPDATE('admin_user',$data);
    }
}



/* End of file Db_login.php */
