<?php
include('config.php');
error_reporting(0);
$title=$_POST['title'];
if(isset($_POST['delete'])){
    $sql="DELETE FROM article WHERE title='$title'";
    if($conn->query($sql)===TRUE){
        header('Location: user.php');
    }
    else{
        echo "error :".$conn->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-image: url(img/supprimer.jpeg);
            background-size: cover;
        }
        h2{
            color: #6652bc;
            font-size: 55px;
        }
        input{
            width: 545px;
            height: 70px;
        }
        .submit{
            width: 70px;
            height: 45px;
            background-color: #5955b7  ;
        }
      

    </style>
    <form method="post" action="delete.php">
        
           <center> <h2>ecrire le titre d'article</h2></center>
     <center><input type="text" name="title"><br><br></center>
     <center><input class="submit" type="submit" name="delete" value="supprimer"></center>
      
   
    </form>
</body>
</html>