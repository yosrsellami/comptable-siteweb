<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 

    <center><h1  style="color:#a669db " ;>Mes Articles</h1><center>
        <div class="blog">
        <style>
         body{
          background-image: url(img/article3.jpg);
          background-size: cover;
         }
              .blog{
        
        margin-left: 25px;
        margin-right: 25px;
          width: auto;
       }
       
         .blog h2  {
          border-radius: 5px;
          margin-top: 25px;
            color: #5826f6;
            margin-bottom: 10px;
            padding: 20px;
      
        }
        .blog  p {
          border-radius: 5px;
          margin-top: 25px;
            color: black;
            padding: 50px;
            background-color: #f2f2f2;
        }
    </style>
    <?php
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "comptable";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Retrieve articles
            $stmt = $conn->prepare("SELECT title, content FROM article");
            $stmt->execute();

            // Display articles
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<h2>{$row['title']}</h2>";
                echo "<p>{$row['content']}</p>";
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    ?>

      </div>
        <!-- Start of REVE Chat Script-->
 <script type='text/javascript'>
    window.$_REVECHAT_API || (function(d, w) { var r = $_REVECHAT_API = function(c) {r._.push(c);}; w.__revechat_account='11179098';w.__revechat_version=2;
      r._= []; var rc = d.createElement('script'); rc.type = 'text/javascript'; rc.async = true; rc.setAttribute('charset', 'utf-8');
      rc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'static.revechat.com/widget/scripts/new-livechat.js?'+new Date().getTime();
      var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(rc, s);
    })(document, window);
   </script>

   
</body>
</html>