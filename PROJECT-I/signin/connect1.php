

<?php
$username= $_POST['username'];
$phone=$_POST['phone'];
$address=$_POST['address'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  echo "Hello". $username;
   $conn= mysqli_connect('localhost','root','password@2003','foodordering');
  if($conn->connect_error){
    die("connection error".$conn->connect_error);
  }else{
        $stmt= $conn->prepare("INSERT INTO users(username, phone, address, email, password) VALUES (?,?,?,?,?)");
       
        $stmt->bind_param('sssss',$username, $phone, $address, $email, $password);
        $stmt->execute();
        echo "sucessful";
        $stmt->close();
        $conn->close();
        header("Location: /project/PROJECT-I/index.html");
        
}

?>


