<?php
class Home extends CORE_Controller{

     public function __construct(){
        parent::__construct();
    } 

    public function index(){
        $data = [
            'title' => 'Dashboard',
            'heading' => 'Dashboard'
        ];

        $this->load->view('templates/home_template.php');
    }
    

    public function profile(Type $var = null){
        
        $this->load->view('templates/home_template.php');
    }
    
}



?>