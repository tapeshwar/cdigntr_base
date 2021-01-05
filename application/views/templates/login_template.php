<?php
$this->load->view('common/common_header.php');

$class = $this->router->fetch_class();

$method = $this->router->fetch_method();

if(!empty($class) && !empty($method)){
    $this->load->view($class.'/'.$method.'_view.php');
}


$this->load->view('common/common_footer.php');
?>