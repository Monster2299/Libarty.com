<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liberty commerce institute</title>
    <?php include"style2.php"; ?>

</head>
<body>
<div class="head-top">
       <section class='navContain'>
            <div class="left-half">
             <img src="logo1.png" alt="logo" height="100px">  
                  
</div>
        <div class="right-half">
        <?php include('session.php'); ?>  
        <h1 id="title">LIBERTY COMMERCE INSTITUTE,NAGARBARA</h1>

        
        </div>
        
        </section>
        
</div>
</div> 
<div class="box">
<h1 style="text-align:center">You can upload contents from here which will publish to the main website !!</h1>
<button><a href="logout.php" style="color:white">logout</a></button>
<?php  include"admin/inputs.php"; ?>
</div>
<?php include"admin/contents.php"; ?>
</body>
</html>