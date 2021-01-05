<?php
class Login extends CORE_Controller{

     public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    } 

    public function index(){

        $data = [
            'title' => 'User Login',
            'heading' => 'User Login'
        ];

        $this->load->view('templates/login_template.php');
    }

    public function user_login(){
        if(!empty($this->input->post())){
            $post = $this->input->post();
            
            $res = $this->user_model->userLogin($post);

            if(!empty($res)){
                if($res['status'] == 'success'){
                    $this->session->set_userdata($res);
                    $ret['sts'] = 'success';
                    $ret['url'] = 'home/index';
                    //return redirect('home/index');  
                }
                if($res['status'] == 'error'){
                    $ret['sts'] = 'error';
                    $ret['msg'] = 'Invalid user';
                }
                echo json_encode($ret);
                    exit();
            }
        }
        
    }

    public function user_logout(){
        session_destroy();
        return redirect('login');
    }
    

    
  
}



?>