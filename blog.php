<?php
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve article data from the form
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Validate and sanitize the input data
        // ...

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "comptable";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Store the article in the database
            $stmt = $conn->prepare("INSERT INTO article (title, content) VALUES (:title, :content)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->execute();

            // Redirect back to the admin panel or index page
            header("Location: user.php");
            exit();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
?>
