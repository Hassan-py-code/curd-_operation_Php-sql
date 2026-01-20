


<?php  
    // create variable to add name server is localhost and root and password is empty and name database to create in php my...
    $conn=mysqli_connect("localhost" ,"root", "","users_db1");

    if(!$conn){
       die("Connection Failed" . mysqli_connect_errno());
    }


?> 
