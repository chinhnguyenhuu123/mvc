<?php
class category extends Dcontroller{ 
    public function __construct(){
        parent::__construct();
        // $data= array();
    }
    public function list_category(){
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');
        $sanpham = 'select * from sanpham';
        $data['category'] =$categorymodel->category($sanpham);
        $this->load->view('category' , $data);
        $this->load->view('footer');
    }

    public function categorybyid(){
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');
        $id = 2;
        $table_category_product = 'tbl_category_product';
        $data['categorybyid'] =$categorymodel->categorybyid($table_category_product,$id);
        $this->load->view('categorybyid' , $data);
        $this->load->view('footer');
    }
    public function homeage(){
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }   

    public function dem(){
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');
        $sanpham = 'select * from sanpham';
        $data['dem'] =$categorymodel->dem($sanpham);
        $this->load->view('category' , $data);
        $this->load->view('footer');
    }
  
}
?>