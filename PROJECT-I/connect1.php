<?php

  $email=$_POST['email'];
  $password=$_POST['password'];
   $conn= new mysqli('localhost','root','password@2003','projectfood');
  if($conn->connect_error){
    die("connection error".$conn->connect_error);
  }else{
        $stmt= $conn->prepare("INSERT INTO customer(email,password,) VALUES (?,?)");
       
        $stmt->bind_param('ss', $email, $password,);
        $stmt->execute();
        echo "sucessful";
        $stmt->close();
        $conn->close();
        
}

?>
