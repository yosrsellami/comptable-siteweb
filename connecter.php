<?php
include('conect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet " href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
   <div class="container">
    <div class="form-box">
        <h1 id="title">S'inscrie</h1>
        <form action="conect.php" method="post">
            <div class="input-group">
               
                <div class="input-field" >
                    <i class="fa-solid fa-envelope fa-lg"></i>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock fa-lg"></i>
                    <input type="password"  name="password" placeholder="Password">
                </div>
                <a href="index.php">acceuil</a>
            </div>
          <div class="btn-field">
          
            <button type="submit"  name="submit" id="conecter">connecter </button>
          </div>
        </form>

    </div>
   </div> 
 
</body>
</html>