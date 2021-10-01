<?php ob_start(); ?>
<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liberty commerce institute</title>
  <?php include"style1.php";  ?>
</head>
<body>









    <div class="login">
     <div class="image"><img src="logo1.png" alt="logo" width="50px"></div> 
<h1>liberty commerce institute</h1>
<form action="manager.php" method="post">
<label for="username">username</label><br>
<input type="text" name="username" placeholder="username" requred><br>
<label for="password">password</label><br>
<input type="password" name="password" placeholder="password" required><br>
<input type="submit" name="submit" value="login" id="btn"><br>
<?php
             if($_SERVER["REQUEST_METHOD"] == "POST") {
                 if(isset($_POST['submit'])){
                 $username = $_POST['username'];
                 $password = $_POST['password'];
                 define('DB_SERVER', 'localhost:3306');
                 define('DB_USERNAME', 'root');
                 define('DB_PASSWORD', '');
                 define('DB_DATABASE', 'lci');
                 $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                
                 if(!$connection){
                     echo "not connected";
                 }
                $username = mysqli_real_escape_string($connection,$username);
                $password = mysqli_real_escape_string($connection,$password);
                 $lquery = "SELECT * FROM boss WHERE username = '{$username}'";
                
                  $result = mysqli_query($connection,$lquery);
                  while($row = mysqli_fetch_assoc($result)){
                    $dusername = $row['username'];
                    $dpassword = $row['password'];
                
                }
               if(isset($dusername)){
                if($username == $dusername && $password == $dpassword){
                    $_SESSION['login_user'] = $dusername;
                    header("Location:uploadpage.php");
                } 
                else{
                    echo "<p style='color:red'>"."wrong password"."</p>";
                   
                }
               }
               else{
                   echo "<p style='color:red'>"."username is not exists"."</p>";
                  
               }
            }
        }
?>

</form>
    </div>
</body>
</html>