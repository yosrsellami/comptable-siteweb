<?php
include('artic.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
    }

    label, textarea, button {
      display: block;
      margin-bottom: 10px;
    }

    textarea {
      height: 200px;
      resize: vertical;
    }

    button {
      padding: 10px;
    }
  </style>
</head>
<body>
  <h1>article</h1>
  <form action="artic.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="content">Content:</label>
    <textarea id="content" name="content" required></textarea>

    <button type="submit">Post</button>
  </form>
</body>
</html>
