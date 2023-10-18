<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "comptable";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

  
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

   
    $sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

 
    if (mysqli_num_rows($result) > 0) {
       
        $_SESSION['email'] = $email;
        header('Location: user.php');
        exit();
    } else {
     
        echo "utilisateur n'existe pas ";
    }

   
    mysqli_close($conn);
}
?>

