

<?php
include('config.php');
error_reporting(0);
//declaration et recuperation des variables
$name=$email=$message="";
//recuperation des donnees
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$submit=$_POST['submit'];
$error="champ obligatoire";
//lancer la requet 
if(isset($submit)){
    if(!empty($name)&&!empty($email)&&!empty($message)){
    $sql="INSERT INTO contact values('$name','$email','$message')";

//test sur la requet
    if ($conn->query($sql)===TRUE){
    
        header('location:index.php');
     } 
    else{
    echo"error ;".$sql."<br>".$conn->error;
     }
}
else{
   echo $error;
   
   }

} 

?>
