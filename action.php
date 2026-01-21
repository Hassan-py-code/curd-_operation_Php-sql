


<?php   

  include "config.php";

  if(isset($_POST["add"])){

     $name=$_POST["name"];
     $email=$_POST["email"];
     $phone=$_POST["Phone"];
     $address=$_POST["address"];

     mysqli_query($conn, "INSERT INTO users(name,email,phone,address)
     VALUES ('$name' , '$email' ,'$phone' ,'$address')
     ");

     header("location: index.php");
     exit;


  };

    if(isset($_POST["update"])){
     
     $id=$_GET["id"];
     $name=$_POST["name"];
     $email=$_POST["email"];
     $phone=$_POST["Phone"];
     $address=$_POST["address"];

    
     mysqli_query($conn,"UPDATE users 
     SET name='$name',email='$email',
     phone='$phone',address='$address'
     where id='$id'");

     header("location: index.php");
     exit;


  };

    if(isset($_GET["id"])){
     
     $id=$_GET["id"];
     
     mysqli_query($conn,"DELETE FROM users 
     where id=$id");
     
     header("location: index.php");
     exit;


  };

?>
