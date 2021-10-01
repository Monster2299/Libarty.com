<?php
   include"codes/db.php";
   session_start();


   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($connection,"SELECT * FROM boss where username = '$user_check'; ");
  
   
   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

   $login_session = $row['username'];
   $myid = $row['id'];
   if(!isset($_SESSION['login_user'])){
      header("location:uploadpage.php");
      die();
   }
?>
