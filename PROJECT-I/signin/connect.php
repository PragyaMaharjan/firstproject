
<?php
   
   $servername="localhost";
   $username= "root";
   $password= "password@2003";
   $dbname= "foodordering";
    //$port="3307";
   //create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
  //  echo "connection was sucessfull";
   //$mysqli = new mysqli("localhost","root","password@2003","projectfood");
   
   // Check connection
   if($conn->connect_error){
    die("connection error".$conn->connect_error);
  }
  $email=$_POST['email'];
  $password=$_POST['password'];
  echo "hi".$email;
  // $sql= "select password from users where email='$email'" ;
  // $result = $conn->query($sql);
  // if($result->num_rows > 0){
  //   $row = $result->fetch_assoc();
  //   $setpassword= $row['password'];
  //   if(password_verify($password, $setpassword)){
    $stmt=$conn->prepare("select * from users where email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->result = $stmt->get_result();
    if($stmt->num_rows > 0){
      $data = $stmt->fetch_assoc();
      if($data['password'] === $password){
        echo "Login Successfully";
      }else{
      echo"Incorrect password!";
    }}
  //}else{
   // echo"User not found!";
  //}
  $conn->close();
   ?>