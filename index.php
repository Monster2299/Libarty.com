<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style> <?php include"style.php";  ?></style>
   
    
    <title>liberty commerce institute</title>
</head>
<body>



<div class="head-top">
       <section class='navContain'>
            <div class="left-half">
             <img src="logo1.png" alt="logo" height="100px">  
                  
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

            <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="dave-MI9AqYWeM24-unsplash1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="farshad-rezvanian-Eelegt4hFNc-unsplash2.jpg"  style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="DSC_00441.jpg"  style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="bulletine">
  <marquee behavior="scroll" direction="left">
  <?php
include"codes/db.php";
$i=1;
$queryan = "SELECT * FROM blt order by id desc";
$posts = mysqli_query($connection,$queryan);
$row = mysqli_fetch_assoc($posts);
  $announcments = $row['bt'];
  echo "<p>".$announcments."</p>";


?>
  
  </marquee>
</div>
<ul>
<div class="alertbox">
<li class="announcements">
<h2>Announcements</h2>

<p>Announcements are</p>

<!-- start -->

<div id="marqueecontainer" onMouseover="copyspeed=pausespeed"  onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 98%;">

 <!--YOUR SCROLL CONTENT HERE-->
<?php

$i=1;
$queryan = "SELECT * FROM anc order by id desc ";
$posts = mysqli_query($connection,$queryan);
while($row = mysqli_fetch_assoc($posts)){
  echo "<p>"."$i.".$announcments = $row['announcements']."</p>";
  $i++;
}
?>
 <!--YOUR SCROLL CONTENT HERE-->

 </div>
 </div><style type="text/css">

#marqueecontainer{
 position: relative;
  width: 300px;
 height: 300px;
 background-color: rgb(126, 235, 126,0.7);
 overflow: hidden;
 padding: 2px;
 padding-left: 4px;
 border-radius:10px;
 }

 </style>
<script type="text/javascript">

 var delayb4scroll=2000 
  var marqueespeed=1 
  var pauseit=1 

   var copyspeed=marqueespeed
   var pausespeed=(pauseit==0)? copyspeed: 0
   var actualheight=''

    function scrollmarquee(){
    if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8))
     cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px" 
     else 
     cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
     }

     function initializemarquee(){
      cross_marquee=document.getElementById("vmarquee")
       cross_marquee.style.top=0
       marqueeheight=document.getElementById("marqueecontainer").offsetHeight
       actualheight=cross_marquee.offsetHeight 
         if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ 
       cross_marquee.style.height=marqueeheight+"px"
      cross_marquee.style.overflow="scroll"
      return
       }
        setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
        }

     if (window.addEventListener)
      window.addEventListener("load", initializemarquee, false)
  else if (window.attachEvent)
     window.attachEvent("onload", initializemarquee)
   else if (document.getElementById)
     window.onload=initializemarquee


    </script>

<!-- end -->









</div>  

<li class="information">
<h2>Informations</h2>
<?php

$i=1;
$queryan = "SELECT * FROM inf order by id desc";
$posts = mysqli_query($connection,$queryan);
while($row = mysqli_fetch_assoc($posts)){
  echo "<p>"."$i.".$announcments = $row['inform']."</p>";
  $i++;
}
?>

</li>
<li class="news">
<h2>News</h2>
<?php

$i=1;
$queryan = "SELECT * FROM news order by id desc";
$posts = mysqli_query($connection,$queryan);
while($row = mysqli_fetch_assoc($posts)){
  echo "<p>"."$i.".$announcments = $row['news']."</p>";
  $i++;
}
?>




</li>
<li class="success">
<h2>Attachments</h2>
<?php

$i=1;
$queryan = "SELECT * FROM pdf order by id desc";
$posts = mysqli_query($connection,$queryan);
while($row = mysqli_fetch_assoc($posts)){
  $attachments = $row['pdf'];

  

?>
<p><?php echo "*"; ?> <a href="codes/<?php echo $attachments; ?>" target="_blank"><?php echo $attachments; ?></a></p>
<?php 

} ?>
</li>



</ul>
<div class="sometext">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore recusandae voluptatem praesentium explicabo amet ratione aut accusantium earum culpa magnam. Aspernatur vitae laudantium itaque, qui sunt iure odit expedita nemo.
Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).



</div>


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
<p>call us on</p>
<img src="calc.png" height="30px" alt=""><a href="tel:+917002515278">+917002515278</a>
<p>mail us on</p>
<img src="calc.png" height="30px" alt=""><a href="mailto:atmonster229@gmail.com">atmonster229@gmail.com</a>
  </div></li>
</ul>




<p id="foot"> copyright &copy; Allright reserved 2020 to 2022 by liberty commerce institute <br> this page is designed by
<a href="https://www.freebird52.000webhostapp.com">mehedi</a> </p>


</div>






<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000);
}
</script>
</body>
</html>