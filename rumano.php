<!DOCTYPE html>
<html lang="en">
<head>
  <title>culinary delights</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/fonts.css">
  
  <script src="js/bootstrap.min.js"></script>


</head>
<body  class="slideInDown animated">
<?php include 'header.php'; ?>
<div>
<img src="images/rumano.jpg" class="rumano-img">
</div>



<div class="container">

<div class="col-lg-12 rumano-text">

   <div style="text-align:center;">
       <h2 class="rumano-heading">Rumano</h2>
    </div>

    <p>At Rumano, our vision is to produce high quality sliced bread, baguettes, croissants, cupcakes, muffins, donuts, cakes and more!
    

</div>

</div>

</div>









<?php include 'footer.php';?>



<style>
.rumano-img{
    width:100%;
}
.rumano-heading{
  text=align:center;
  font-family: 'Roboto', sans-serif;
  font-family: 'Galada', cursive;
  font-family: 'Lobster Two', cursive;
  font-size:xx-large;
  margin-top: 2rem;
}
}
@media (max-width: 870px) {
.rumano-img{
    width:100%;
    height:45vh;
}
}
@media (max-width: 770px) {
.rumano-img {
    width: 100%;
    height: 38vh;
}
}
@media (max-width: 450px) {
.rumano-img{
    width:100%;
    height:20vh;
}
}
.rumano-text{
font-family: 'Poiret One', cursive;
font-family: 'Comic Neue', cursive;
font-size:larger;
}
.rumano-text p{
    margin-top:3rem;
    margin-bottom:7rem;
}
@media (max-width: 450px){
    .rumano-text{
font-family: 'Poiret One', cursive;
font-family: 'Comic Neue', cursive;
font-size:large;
}  
}
@media (max-width: 374px){
    .rumano-text{
font-family: 'Poiret One', cursive;
font-family: 'Comic Neue', cursive;
font-size:medium;
}  
}
</style>
</body>
</html>