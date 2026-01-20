


<?php   

  include "config.php";

  if(isset($_POST["add"])){

     $name=$_POST["name"];
     $email=$_POST["email"];
     $phone=$_POST["phone"];
     $address=$_POST["address"];

     mysqli_query($conn, "INSERT INTO users(name,email,phone,address)
     VALUES ('$name' , '$email' ,'$phone' ,'$address')
     ");

     header("location: index.php");
     exit;


  };

?>