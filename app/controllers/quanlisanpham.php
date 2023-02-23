<?php
class quanlisanpham extends Dcontroller{ 
    public function __construct(){
        parent::__construct();
    }
    public function loadquanlisanpham(){
        $this->load->view('header',);
        $this->load->view('menu',);
        $this->load->view('quanlisanpham' ,);
        $this->load->view('footer',);
    }
}
?>