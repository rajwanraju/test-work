<?php

namespace App\classes;

use App\classes\Database;

class Login {


    public function addData($data){

      // print_r($data);

 $sql= "INSERT INTO url (url) VALUES ('$data')";

      if(mysqli_query(Database::dbConnection(), $sql)){
          $message = "Add URL successfully";
          return $message;
      }else{
          die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
      }
      


}



   public function addImage($data){

      // print_r($data);

 $sql= "INSERT INTO image (image) VALUES ('$data')";

      if(mysqli_query(Database::dbConnection(), $sql)){
          $message = "Add Image successfully";
          return $message;
      }else{
          die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
      }
      


}


   public function addTag($data){

      // print_r($data);

 $sql= "INSERT INTO tags (tag) VALUES ('$data')";

      if(mysqli_query(Database::dbConnection(), $sql)){
          $message = "Add Tag successfully";
          return $message;
      }else{
          die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
      }
      


}  

 public function addTitle($data){

      // print_r($data);

 $sql= "INSERT INTO title (title) VALUES ('$data')";

      if(mysqli_query(Database::dbConnection(), $sql)){
          $message = "Add Title successfully";
          return $message;
      }else{
          die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
      }
      


}

}