<?php

 //db connect with mysqli
    // $db=new mysqli('localhost','root','','oop');
    // if(mysqli_connect_error()){
    //     echo "db connetion error";
    // }else{
    //     echo "db connection";
    // }


    //db connect with pdo

    $dsn="mysql:dbname=oop;host=localhost";
    $username="root";
    $password="";

    try{
        $pdo=new PDO($dsn,$username,$password);
        
    }
    catch(PDOException $e){
        echo "connection faild".$e->getMessage();
    }

    //fetch data quary
//     $sql="select * from users";
//     $results=$pdo->query($sql);
// foreach($results as $result){
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// }

$name="fahim";
$email="fahim@gmail.com";
$phone="120";

$sql="insert into users(name,email,phone) values(:name,:email,:phone)";
$sttm=$pdo->prepare($sql);
$sttm->bindParam(':name',$name);
$sttm->bindParam(':email',$email);
$sttm->bindParam(':phone',$email,PDO::PARAM_INT);
$sttm->execute();

?>