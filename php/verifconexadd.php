<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
session_start();
if(isset($_GET['sign'])){

    if(empty($_GET['email'])||empty($_GET['pass'])){

    header('location: http://localhost/projet/php/conadd.php? Empty= remplir vos champs ') ; }    
          
            else
            {
                 $query="SELECT email,pass FROM adm";
                 $result=mysqli_query($conn,$query);
      
                 if(mysqli_fetch_assoc($result))
                 {
                    $_SESSION['email']=$_GET['email'];
                    $_SESSION['pass']=$_GET['pass'];
                    header('location: http://localhost/projet/php/profileadd.php');
                  
                 }
                 else
                 {
                     header("location: ../php/conadd.php?Invalid= Please Enter Correct User Name and Password ");
                 }
       }
}
    else
    {
        echo 'Not Working Now Guys';
    }

?>