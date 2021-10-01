<?php
echo"
*{
    margin:0px;
    padding:0px;
}

.head-top{
    width:100%;
    height: 100px;
    background-color: rgb(6, 236, 83);
}
.left-half{
    left: 20px;
    position: absolute;
}
.right-half{
    /* right:40px; */
    left:200px;
    position: absolute;
   
}

#title{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size:42px;
    font-weight: bold;
    color:yellow;
    text-shadow:1px 2px 4px black;
}
.navbar{
    width:100%;
    height: 20px;
    background-color: rgb(8, 179, 65); 
}
ul {
        list-style-type: none;
        margin:0;
        padding: 0;
        overflow: hidden;
       
      }
li{
float:left;
margin-left:50px;
}
.alertbox{
  margin-left:50px;
}
.dropbtn{
    background-color:inherit;
    border:none;
}
.dropdown-content{
    display:none;
    float:bottom;
    z-index:1;
    position: absolute;
    background-color:white;
    width:relative;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
   
}
.dropdown:hover .dropdown-content {
    display: block;
  }
  .dropdown-content a:hover {background-color:green;
}
a{
    text-decoration: none;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
h2{
    border:green dotted 1px;
}
.alertbox{
    float:left;
}
.announcements{
    width:300px;
    height:300px;
    background-color: rgb(126, 235, 126,0.7);
    
}
.information{
    width:300px;
    height:300px;
    background-color:rgb(255, 123, 123,0.7);
}
.news{
    width:300px;
    height:300px;
    background-color: rgb(247, 247, 130,0.7);
}
.success{
    width:300px;
    height:300px;
    background-color: rgba(57, 224, 93, 0.7);
}
.footer{
    width:100%;
    height:400px;
    background-color:grey;
}
#foot{
    text-align: center;
}
#principal{
  display: inline-block;
}
.address{
  width:300px;
  height:300px;
}
.contacts{
  width:300px;
  height:300px;
  margin-left:100px;
  
}
.links{
  margin-left:100px;
  width:300px;
  height:300px;
 
}
#map{
  width:300px;
  height:300px; 
}
"
?>