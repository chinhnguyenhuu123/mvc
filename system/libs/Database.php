<?php
class Database extends PDO{
    public function __construct($connect,$user,$pass){
        parent::__construct($connect,$user,$pass);

    }
    public function select1($sql){
        $statement = $this->prepare($sql);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();
        return $statement->fetchAll();
    }
    // public function select($sql, $data=array(), $fechstyle = PDO::FETCH_ASSOC){
    //     $statement = $this->prepare($sql);
    //     foreach($data as $key => $value){
    //         $statement->bindParam($key,$value);
    //     }
    //     $statement->execute();
    //     return $statement->fetchAll($fechstyle);
    // }
    public function countselect($sql){
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->rowCount();
    }
    public function insert($sql){
        $statement = $this->prepare($sql);
        return $statement->execute();
    }
}
?>