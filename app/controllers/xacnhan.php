<?php
class xacnhan extends Dcontroller{ 
    public function __construct(){
        parent::__construct();
    }
    public function loadxacnhan(){
        $this->load->view('header',);
        $this->load->view('menu',);
        $this->load->view('xacnhan' ,);
        $this->load->view('footer',);
    }
}
?>