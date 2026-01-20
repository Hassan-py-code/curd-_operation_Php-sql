
<?php 
   include "config.php";
   $query =mysqli_query($conn ,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curd  operation using php & Mysql ! condehal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
         <h1>User list</h1>
         <a href="add.php">Add User</a>
   

    <table>
         <tr>
            <th>No.</th>
            <th>Nmae</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
         </tr>
          
         <?php  
             
             $no=1;
             while($user =mysqli_fetch_assoc($query)):
            
          ?>

         <tr>
             <td><?=  $no++ ?></td>
             <td><?=  $user["name"] ?></td>
             <td><?=  $user["email"] ?></td>
             <td><?= $user["phone"]   ?></td>
             <td> <?=  $user["address"]  ?> </td>
             <td>
                <a href="edit.php">Edit</a>
              <a href="" class="btn-delete">Delete</a></td>
           
         </tr>
         <?php   endwhile;?>
    </table>
    </div>


</body>
</html>