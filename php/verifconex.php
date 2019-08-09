<?php
session_start();
?>
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

if(isset($_GET['sign'])){

    if(empty($_GET['email'])||empty($_GET['pass'])){

    header('location: http://localhost/projet/php/conx.php? Empty= remplir vos champs ') ; }    
          
            else
            {
                
                 $query="SELECT * from inscription where email='".$_GET['email']."' and pass='".$_GET['pass']."'";
                 $result=mysqli_query($conn,$query);
      
                 if(mysqli_fetch_assoc($result))
                 {
                    $_SESSION['email']=$_GET['email'];
                    header('location: http://localhost/projet/php/profileuser.php');
                  
                 }
                 else
                 {
                     header("location: ../php/conx.php?Invalid= Please Enter Correct email and Password ");
                 }
       }
}
    else
    {
        echo 'Not Working Now Guys';
    }

?>