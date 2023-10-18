<?php
include('config.php');

// Initialize variables
$name = $email = $password = "";
$error = "Champ obligatoire";

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $submit=$_POST['submit'];}
    if(isset($submit)){
    // Validate and process form data
    if (!empty($name) && !empty($email) && !empty($password)) {
        // Prepare the SQL statement
        $sql = "INSERT INTO comp (name, email, password) VALUES ('$name', '$email', '$password')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Nouvel enregistrement créé avec succès :)";
            header('Location: connecter.html');
            exit();
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo $error;
        header('Location: signup.php');
        exit();
    }
} 
?>
