<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> <?php include"style.php"; ?></style>
  
    
    <title>liberty commerce institute</title>
</head>
<body>



<div class="head-top">
       <section class='navContain'>
            <div class="left-half">
             <img src="logo1.png" alt="logo" height="100px" margin="10px">  
                  
</div>
        <div class="right-half">
            
        <h1 id="title">LIBERTY COMMERCE INSTITUTE,NAGARBARA</h1>
        <p>Your future,Our mission !</p>
       
        </div>
        
        </section>
        
</div>
<hr>
<div class="navbar">
<ul>
<li class="drp"><a href="index.php">HOME</a></li>
 
    <li><div class="dropdown">
  <button class="dropbtn"><h3>Student</h3></button>
  <div class="dropdown-content">
<p><a href="hostels.php">Hostels</a></p>  
<p> <a href="activities.php">activities</a></p> 
  </div>
</div>
</li>
<li>

</li>
<li class="drp"><div class="dropdown">
  <button class="dropbtn"><h3>Admission </h3> </button>
  <div class="dropdown-content">
  <p><a href="#">Course details</a></p>
<p> <a href="hostels.php">Hostel details</a></p> 
  </div>
</div></li>
<li><div class="dropdown">
  <button class="dropbtn"><h3>Facilities </h3> </button>
  <div class="dropdown-content">
  <p><a href="#">Tution</a></p>
<p><a href="#">Hostel</a></p>  
<p> <a href="#">Teachers</a></p> 
  </div>
</div></li>
<li><div class="dropdown">
  <button class="dropbtn">  <h3>About us</h3> </button>
  <div class="dropdown-content">
  <p><a href="lci.php"> About Liberty commerce institute</a></p>
<p><a href="lci.php">About campus</a></p>  
<p> <a href="principal.php">About principle</a></p>
<p><a href="management.php">About Management</a></p>
  </div>
</div></li>
<li><div class="dropdown">
  <button class="dropbtn">   <h3>Contact us</h3> </button>
  <div class="dropdown-content">
  <p><a href="mailto:atmehedihassan29@gmail.com">Mail us</a></p>
<p><a href="tel:+917002515278">Call us</a></p>  

  </div>
</div></li>

<li><a href="manager.php">admin panel</a></li>
<li><a href="gallery.php">Gallery</a></li>

</div>
</div>
</ul>
<hr>
<?php

include"codes/db.php";
$queryan = "SELECT * FROM image order by id desc ";
$posts = mysqli_query($connection,$queryan);
while($row = mysqli_fetch_assoc($posts)){
  $announcments = $row['image'];
 


?>

 <img src="images/<?php echo $announcments; ?>" alt="images" height="200px">
<?php } ?>











 
<div class="footer">
<ul>
  <li><div class="address">
<h1> <u>Address :-</u> </h1>
<h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere nihil ex odit veritatis ad! Eius odit ab necessitatibus eaque repellat dolor veritatis perferendis vel rem quod sint, natus doloremque officia?</h3>
  </div></li>
  <li><div class="contacts">
<h1> <u>our connections</u> </h1>
<?php include"codes/map.php";  ?>
  </div></li>
  <li><div class="links">
<h1><u>usefull links</u></h1>
  </div></li>
</ul>




<p id="foot"> copyright &copy; Allright reserved 2020 to 2022 by liberty commerce institute <br> this page is designed by
<a href="https://www.freebird52.000webhostapp.com">mehedi</a> </p>


</div>



















</body>
</html>