<?php 

   include "config.php";
   $id=$_GET["id"];
   $query =mysqli_query($conn ,"SELECT * FROM users
   WHERE id=$id");

   $user=mysqli_fetch_assoc($query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
 
    <div class="wrapper">
        <div class="form-wrappeer">
            <h1>Edit User</h1>
            <form action="action.php?id=<?= $id ?>" method="post">
                <input type="text" name="name" placeholder="Name"  value="<?= $user["name"] ?>" require>
                <input type="email" name="email" placeholder="Email" value="<?=  $user["email"] ?>" require>
                <input type="tel" name="Phone" placeholder="Phone" value="<?= $user["phone"] ?>" require>
                <textarea name="address" placeholder="Address" require><?= $user["address"] ?></textarea>
                <div class="btn-box">
                    <button type="submit" class="btn" name="update">Update</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>


</body>
</html>