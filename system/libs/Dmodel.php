<?php
class Dmodel{
    protected $db=array();
    public function __construct(){
        $connect = 'mysql:dbname=shopaoquan;host=localhost';
        $user = 'root';
        $pass = "";
        $this->db = new Database($connect,$user,$pass);
    }
}
?>