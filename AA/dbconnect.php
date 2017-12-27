<?php
class dbconnect{
    public function connect(){
         $host = 'localhost';
         $user = 'root';
         $pass = 'root';
         $db   = 'kbm_groupware';
         $connection = mysqli_connect($host,$user,$pass,$db); 
         return $connection;
     }
}