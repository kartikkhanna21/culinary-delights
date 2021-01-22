<!DOCTYPE html>

<html>

<title>CULINARY DELIGHTS</title>

<head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">












<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/fonts.css">
<body>
<?php include 'header.php'; ?>
<!--SLIDESHOW-->
<?php include 'slideshow.php'; ?>

<!--SLIDESHOW CLOSE-->

<!--SERVICES-->
<div class="slideInDown animated" style="margin-top:2rem;margin-bottom:2rem">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/rumano.png" >
	    <h3 class="card-text">Rumano</h3>
	 
    </div>
    <div class="flip-card-back">
   
	<img src="images/rumano.png" style="width: 100px; height:100px;">
	  <p class="rumano">At Rumano, our vision is to produce high quality sliced bread, baguettes, croissants, cupcakes, muffins, donuts, cakes and more!</p>
	  <a href="rumano.php"><button type="button" class="btn btn-outline-danger">Know More</button></a>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/pizza-king.png" alt="Avatar" >
	  <h3 class="card-text">Pizza King</h3>
    </div>
    <div class="flip-card-back">
	<img src="images/pizza-king.png" alt="Avatar" style="width:100px;height:100px;">
      <p class="pizza_king">At Pizza King, our vision is to be a proactive player in interacting with our customers, to understand their tastes and preferences, to introduce new flavours based on local tastes.

        We launched our first outlet with 5 variants - the classic margherita, spicy hawaiian, chicken suya, chicken tandoori, and the vegetarian exotic.</p>
        <a href="pizza-king.php"><button type="button" class="btn btn-outline-danger">Know More</button></a>
	</div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/mamamia.png" alt="Avatar" >
	  <h3 class="card-text">Mama Mia</h3>
	 
    </div>
    <div class="flip-card-back">
	<img src="images/mamamia.png" alt="Avatar" style="width:100px;height:100px;">
      <p class="mama_mia">At Mama Mia we aim to bring together selected cusines from all over the world. We commenced operations with Chinese fried rice available in vegetarian and chicken options, Persian biryani available in veg and chicken options, schwean rice in veg and chicken, jollof rice.  Our chicken relishes at launch include suya chicken, tandoori chicken, Lollipop chicken and fried chicken served in a bite size.  Our sides include french fries.  We will regulary add more interesting cuisines to our menu.</p>
      <a href="mama-mia.php"><button type="button" class="btn btn-outline-danger">Know More</button></a>
	</div>
  </div>
</div>
</div>
<br><br>
<br><br>
<br><br>
<!--SERVICES CLOSE-->
<!--gallery start-->
<?php include 'gallery.php'; ?>


<!--end gallery-->
<?php include 'footer.php';?>


</body>




<style>
* {
  box-sizing: border-box;
}

	body{
	height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
	background-attachment: fixed;
	margin:0px;
	}

/*services style */
.card-text{
  font-family: 'Roboto', sans-serif;
font-family: 'Galada', cursive;
font-family: 'Lobster Two', cursive;
font-family: 'Quicksand', sans-serif;
}
.flip-card {
  background-color: white;
  width: 200px;
  height: 450px;
  margin-left:1%;
	width: 32%;
	float: left;
  padding: 0px 15px 0px 15px;
  perspective: 1000px;
  margin-bottom: 2em;

}
@media only screen and (max-width: 980px){
	.flip-card{
		width:100%;
	}
}
.flip-card-inner {
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: rgb(255, 255, 255);
  color: black;
  box-shadow: 7px 7px 26px 2px #888888;
}
.flip-card-front img{
    border-radius: 50%;
    margin-top: 8rem;
    margin-bottom: 3rem;
    width: 120px;
    height: 120px;

}
.flip-card-back img{
  border-radius: 50%;
  padding-top: 2rem;
}
.flip-card-back {
  background-color: white;
  color: black;
  transform: rotateY(180deg);
  box-shadow: 5px 5px 25px 2px #888888;
}
.rumano{
	text-align: center;
    margin-top: 6rem;
    margin-bottom: 7rem;
    font-family: 'Roboto', sans-serif;
font-family: 'Galada', cursive;
font-family: 'Lobster Two', cursive;
font-family: 'Quicksand', sans-serif;
}
.pizza_king{
	text-align: center;
    margin-top: 2rem;
    margin-bottom: 2rem;
    font-size: medium;
    font-family: 'Roboto', sans-serif;
font-family: 'Galada', cursive;
font-family: 'Lobster Two', cursive;
font-family: 'Quicksand', sans-serif;
}
.mama_mia{
    text-align: center;
    margin-top: 2rem;
    margin-bottom: 3rem;
    font-size: 13.3px;
    font-family: 'Roboto', sans-serif;
   font-family: 'Galada', cursive;
   font-family: 'Lobster Two', cursive;
   font-family: 'Quicksand', sans-serif;
}
}
/*services style close */
</style>

</body>

</html>