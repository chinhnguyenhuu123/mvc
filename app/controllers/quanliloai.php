<?php
class quanliloai extends Dcontroller{ 
    public function __construct(){
        parent::__construct();
    }
    public function loadquanliloai(){
        $this->load->view('header',);
        $this->load->view('menu',);
        $this->load->view('quanliloai' ,);
        $this->load->view('footer',);
    }
    public function list_loai(){
        $loai = $this->load->model('quanliloai');
        $sanpham = 'select * from loai';
        $data['loai'] =$loai->listloai($sanpham);
        $this->load->view('category' , $data); 
    }
}
?>