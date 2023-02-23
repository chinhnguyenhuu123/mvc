<?php
class adminlogin extends Dmodel{
    public function __construct(){
        parent::__construct();
    }
    public function login( $table_category_product){
        return $this->db->countselect( $table_category_product);
    }
    public function register($sql){
        return $this->db->insert($sql);
    }
}
?>