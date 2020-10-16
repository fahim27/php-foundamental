<?php
include "DB.php";

abstract class Main{
    protected $table;

    
    public function all(){
            $sql="SELECT * FROM $this->table";
            $stmt=DB::prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }
        public function edit($id){
            $sql="SELECT * FROM $this->table WHERE :id=id";
            $stmt=DB::prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            return $stmt->fetch();
        }

    public function delete($id){
            $sql="DELETE FROM $this->table WHERE id=:id";
            $stmt=DB::prepare($sql);
            $stmt->bindParam(':id',$id);
           return $stmt->execute();
        }
}

?>