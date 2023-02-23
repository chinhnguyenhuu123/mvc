<?php
class chuyentien extends Dcontroller{ 
    public function __construct(){
        parent::__construct();
    }
    public function loadchuyentien(){
        $this->load->view('header',);
        $this->load->view('menu',);
        $this->load->view('chuyentien' ,);
        $this->load->view('footer',);
    }
}
?>