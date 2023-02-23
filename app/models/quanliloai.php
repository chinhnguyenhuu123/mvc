<?php
class quanliloai extends Dmodel{
    public function __construct(){
        parent::__construct();
    }
    public function listloai( $table_category_product){
        return $this->db->select1( $table_category_product);
    }
    public function categorybyid( $table_category_product,$id){
        $sql = "select * from ".$table_category_product." where id_category_product =:id";
        $data = array(':id'=>$id);
        return  $this->db->select($sql,$data);
    }
}
?>