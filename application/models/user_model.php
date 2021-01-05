<?php

Class user_model extends CI_Model{

    public function userLogin($data){

        $user_name = $data['username'];
        $pass_word = $data['password'];
        $query = $this->db->query("SELECT * FROM users WHERE username = '".$user_name."' ");
        $row = $query->row_array();

        $ret = [];
        if(!empty($row['password']) && $row['password'] == $pass_word){  
            $ret['status'] = 'success'; 
            $ret['id'] = $row['id'];
            $ret['username'] = $row['username'];
            $ret['first_name'] = $row['first_name'];    
        }else{
            $ret['status'] = 'error';
        }
        return $ret;

    }
    
}


?>