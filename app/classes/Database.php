<?php

namespace App\classes;

class Database
{
     public function dbConnection(){
         $hostName = "localhost";
         $userName = "root";
         $password = "";
         $dbName = "demo_test";

         $link = mysqli_connect($hostName, $userName, $password, $dbName);
        return $link;
     }

}