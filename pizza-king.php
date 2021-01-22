<!DOCTYPE html>
<html lang="en">
<head>
  <title>Culinary Delights</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/animate.css">

 
  <script src="js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body  class="slideInDown animated">
<?php include 'header.php'; ?>
<div>
<img src="images/pizza-king.jpg" class="pizza-king-img">
</div>



<div class="container">

<div class="col-lg-12 pizza-king-text">

    <div style="text-align:center;">
       <h2 class="pizza-king-heading">Pizza King</h2>
    </div>

    <p>At Pizza King, our vision is to be a proactive player in interacting with our customers, to understand their tastes and preferences, to introduce new flavours based on local tastes.</p>

			

<p>We launched our first outlet with 5 variants - the classic margherita, spicy hawaiian, chicken suya, chicken tandoori, and the vegetarian exotic. </p>

</div>
<div class="conatctinfo-col1">
            <h3 class="follow-us">Follow Us:</h3>

            <span class="social-icons fb"><!-- HERE SOCIAL ICONS IS COMMON CLASS AND FB IS PRIVATE CLASS, SO WE CAN DEFINE TWO CLASSES TOGTHER-->
                <a href="https://www.instagram.com/pizzakingng?igshid=1mcghog602i16" target="_blank"><img src="images/insta_logo.png" class="instagram"></a>&nbsp;
            </span>

            </span>
        </div>

</div>

</div>

</div>









<?php include 'footer.php';?>



<style>
.pizza-king-heading{
  text=align:center;
  font-family: 'Roboto', sans-serif;
  font-family: 'Galada', cursive;
  font-family: 'Lobster Two', cursive;
  font-size:xx-large;
  margin-top: 2rem;
}
.pizza-king-img{
    width:100%;
}
@media (max-width: 870px) {
.pizza-king-img{
    width:100%;
    height:45vh;
}
}
@media (max-width: 770px) {
.pizza-king-img{
    width: 100%;
    height: 38vh;
}
}
@media (max-width: 450px) {
.pizza-king-img{
    width:100%;
    height:20vh;
}
}
.pizza-king-text{
font-family: 'Poiret One', cursive;
font-family: 'Comic Neue', cursive;
font-size:larger;
}
.pizza-king-text p{
    margin-top:2rem;
}
@media (max-width: 450px){
    .pizza-king-text{
font-family: 'Poiret One', cursive;
font-family: 'Comic Neue', cursive;
font-size:large;
}  
}
@media (max-width: 374px){
    .pizza-king-text{
font-family: 'Poiret One', cursive;
font-family: 'Comic Neue', cursive;
font-size:medium;
}  
}

.social-icons{
	padding: 6px;
}

.instagram{
    margin-top:2rem;
    height:45px;
    border-radius:50%;
    transition: transform .2s; 
}
.instagram:hover{
    -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style>
</body>
</html>