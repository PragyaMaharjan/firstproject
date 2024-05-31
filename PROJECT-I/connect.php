 <?php
  $firstname= $_POST['firstname'];
  $lastname= $_POST['lastname'];
  $phone= $_POST['phone'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $conn= new mysqli('localhost','root','password@2003','3306','projectfood');
  if($conn->connect_error){
    die("connection error".$conn->connect_error);
  }else{
        $stmt= $conn->prepare("INSERT INTO customer(firstname,lastname,phone,address,email,password,) VALUES (?,?,?,?,?,?)");
       
        $stmt->bind_param('ssisss',$firstname,$lastname,$phone,$address, $email, $password,);
        $stmt->execute();
        echo "sucessful";
        $stmt->close();
        $conn->close();
      
}
?> 
