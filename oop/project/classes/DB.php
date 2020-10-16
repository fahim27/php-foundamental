<?php
include "config.php";
    class DB{
        private static $pdo;

        public static function connection(){
            if(!isset(self::$pdo)){
                try{
                  

                    self::$pdo=new PDO('mysql:dbname='.DB_NAME.';' .'dbhost='.DB_HOST,DB_USER,DB_PASS);
    
                }
                catch(PDOException $e){
                    echo "connection faild for ".$e->getMessage();
                }
            }
            return self::$pdo;

        }

        public static function prepare($sql){
              return  self::connection()->prepare($sql);
        }
    };

  

?>