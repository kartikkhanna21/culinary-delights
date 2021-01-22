<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body>
<div class="w3-content w3-section slideInDown animated">
  

  <img class="mySlides w3-animate-fading img-thumbnail" src="images/gallery1.jpg">
  <img class="mySlides w3-animate-fading img-thumbnail" src="images/slider1.jpg" >
  <img class="mySlides w3-animate-fading img-thumbnail" src="images/slider2.jpeg">
  <img class="mySlides w3-animate-fading img-thumbnail" src="images/slider3.jpg" >
  <img class="mySlides w3-animate-fading img-thumbnail" src="images/slider4.jpg" >
</div>
<script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 9000);    
    }
</script>
 <!--slideshow script closes-->   
 <style>
 .img-thumbnail{
    box-shadow: 7px 7px 26px 2px #888888;
 }
 .w3-section img{
  width:100%;
  max-height:80vh;
  height:auto;
 }
 @media only screen and (min-width: 1500px){
.w3-section img{
  width:100%;
  height:60vh;
 }
 }
 @media only screen and (min-width: 1900px){
.w3-section img{
  width:100%;
  height:40vh;
 }
 }
 @media only screen and (max-width: 1025px){
.w3-section img{
  width:100%;
  height:66vh;
 }
 }
 @media only screen and (max-width: 780px){
.w3-section img{
  width:100%;
  height:47vh;
 }
 }
 @media only screen and (max-width: 500px){
.w3-section img{
  width:100%;
  height:35vh;
 }
 }
 @media only screen and (max-width: 365px){
.w3-section img{
  width:100%;
  height:40vh;
 }
 }
 </style>
 </body>
</html>