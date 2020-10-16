<?php
include "Main.php";
    class User extends Main{
        protected $table="users";
        private $name="";
        private $email="";
        private $phone="";

        public function setName($name){
            $this->name=$name;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function setPhone($phone){
            $this->phone=$phone;
        }
        

        public function insert(){
            $sql="INSERT INTO $this->table(name, email, phone) VALUES(:name, :email, :phone)";
            $stmt=DB::prepare($sql);
            $stmt->bindParam(':name',$this->name);
            $stmt->bindParam(':email',$this->email);
            $stmt->bindParam(':phone',$this->phone);
            return $stmt->execute();


        }


        public function update($id){
            $sql="UPDATE $this->table SET name=:name, email=:email, phone=:phone WHERE id=:id";
            $stmt=DB::prepare($sql);
            $stmt->bindParam(':name',$this->name);
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':email',$this->email);
            $stmt->bindParam(':phone',$this->phone);
            return $stmt->execute();
        }

        
    }

   

?>