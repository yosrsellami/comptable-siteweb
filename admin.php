<?php

include('config.php');


$sql="SELECT * FROM contact";
$res=mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
   
<?php
while($row=mysqli_fetch_array($res)){
?>
<div class="block">
    
    <p><span>name:</span> <?php echo $row['nom'] ?></p>
    <p><span>email:</span> <?php echo $row['email'] ?></p>
    <p><span>message:</span> <?php echo $row['message'] ?></p>
   
   
</div>
<?php
}
?>
<h3>page d'acceuil<a href="index.php">Home</a>

</div>
</body>
</html>