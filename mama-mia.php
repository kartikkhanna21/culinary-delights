<!DOCTYPE html>
<html lang="en">
<head>
  <title>Culinary Delights</title>
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
<img src="images/mamamia.jpg" class="mama-mia-img">
</div>



<div class="container">

<div class="col-lg-12 mama-mia-text">

    <div style="text-align:center;">
       <h2 class="mama-mia-heading">Mama Mia</h2>
    </div>

    <p>At Mama Mia we aim to bring together selected cusines from all over the world. We commenced operations with Chinese fried rice available in vegetarian and chicken options, Persian biryani available in veg and chicken options, schwean rice in veg and chicken, jollof rice.  Our chicken relishes at launch include suya chicken, tandoori chicken, Lollipop chicken and fried chicken served in a bite size.  Our sides include french fries.  We will regulary add more interesting cuisines to our menu.</p>

</div>

<div class="conatctinfo-col1">
            <h3 class="follow-us">Follow Us:</h3>

            <span class="social-icons fb"><!-- HERE SOCIAL ICONS IS COMMON CLASS AND FB IS PRIVATE CLASS, SO WE CAN DEFINE TWO CLASSES TOGTHER-->
                <a href="https://m.facebook.com/mamamianig/" target="_blank"><img src="images/facebook_logo.png" class="facebook"></a>&nbsp;
            </span>
            <span class="social-icons fb"><!-- HERE SOCIAL ICONS IS COMMON CLASS AND FB IS PRIVATE CLASS, SO WE CAN DEFINE TWO CLASSES TOGTHER-->
                <a href="https://www.instagram.com/mamamianigeria?igshid=170fta8f3is2n" target="_blank"><img src="images/insta_logo.png" class="instagram"></a>&nbsp;
            </span>
            </span>
        </div>

</div>

</div>









<?php include 'footer.php';?>



<style>
.mama-mia-heading{
  text=align:center;
  font-family: 'Roboto', sans-serif;
  font-family: 'Galada', cursive;
  font-family: 'Lobster Two', cursive;
  font-size:xx-large;
  margin-top: 2rem;
}
.mama-mia-img{
    width:100%;
}
@media (max-width: 870px) {
.mama-mia-img{
    width:100%;
    height:45vh;
}
}
@media (max-width: 770px) {
.mama-mia-img{
    width: 100%;
    height: 38vh;
}
}
@media (max-width: 450px) {
.mama-mia-img{
    width:100%;
    height:20vh;
}
}
.mama-mia-text{
font-family: 'Poiret One', cursive;
font-family: 'Comic Neue', cursive;
font-size:larger;
}
.mama-mia-text p{
    margin-top:2rem;
}
@media (max-width: 450px){
    .mama-mia-text{
font-family: 'Poiret One', cursive;
font-family: 'Comic Neue', cursive;
font-size:large;
}  
}
@media (max-width: 374px){
    .mama-mia-text{
font-family: 'Poiret One', cursive;
font-family: 'Comic Neue', cursive;
font-size:medium;
}  
}



.follow-us{
    margin-bottom:2rem;
}
.conatctinfo-col1{
	width: 100%;
    padding-left: 1rem;
    margin-top: 2rem;
 
}
.conatctinfo-col1 b{
	font-size: 1.5em;
}
.social-icons{
	padding: 6px;
}
.fb{
    
    cursor: pointer;
    
}
.facebook{
    height:45px;
    border-radius:50%;
    transition: transform .2s;
}
.facebook:hover{
    -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
   
          
}
.instagram{
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