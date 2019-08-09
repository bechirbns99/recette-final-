
<?php 
    session_start();
    if(isset($_GET['dex']))
    {
        session_destroy();
        header("location:../html/index.html");
    }
 
?>