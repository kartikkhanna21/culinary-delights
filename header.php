<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/fonts.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body >
<!--navbar-->
<nav class=" navbar navbar-expand-lg navbar-light slideInDown animated sticky-top nav-look">
        <img src="images/culinary_logo.png" class="culinary-logo-nav">
        <a class="navbar-brand brand" href="index.php">Culinary Delights</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon my-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link item-look" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link look" href="about-us.php">About Us</a>
            </li>
         
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle look" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Our Brand
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" id="change" href="rumano.php">Rumano</a>
                <a class="dropdown-item" id="change" href="pizza-king.php">Pizza King</a>
                <a class="dropdown-item" id="change" href="mama-mia.php">Mama Mia</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>



 <!--navbar close-->     
<style>
/*navbar styles */  
/*toggler styles */ 

.navbar-light .navbar-toggler {
    /* color: rgb(255, 255, 255); */
    border-color: rgb(113, 107, 107);
    background-color: rgb(72, 72, 72);
}
.navbar-light .navbar-toggler-icon {
    background-image: url("images/nav-icon.png");
    height:27px;
}
/*toggler styles close*/ 
.culinary-logo-nav{
  height:50px;
}
@media only screen and (max-width: 380px){
  .culinary-logo-nav{
  height:36px;
  margin-left: 9.5rem;
}
}
@media only screen and (max-width: 330px){
  .culinary-logo-nav{
  height:36px;
  margin-left:8rem;
}
}
@media only screen and (max-width: 365px){
  .culinary-logo-nav{
  height:36px;
  margin-left:10rem;
}
}
.nav-look{
      background-color: #000000;
      background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
}
.navbar-light .navbar-brand {
     color: #ff8c00;
     font-weight:bold;
}
.navbar-light .navbar-brand:hover {
      color: #ff8c00;
      -webkit-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.1);
      transition: 0.3s ease;
          
}
.navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left:1.4rem;
}
@media only screen and (max-width: 420px){
  .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left: 0.4rem;
}
}
@media only screen and (max-width: 380px){
  .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left: 4rem;
}
}

@media only screen and (max-width: 361px){
  .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left:4.2rem;
}
}

@media only screen and (max-width: 325px){
  .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left:3rem;
}
}


.brand{
  font-family: 'Oswald', sans-serif;
    font-family: 'Dosis', sans-serif;
      
}
.nav-link{
  font-family: 'Dosis', sans-serif;
  font-family: 'Oswald', sans-serif;
  font-size: larger;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
      color: white;
  
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link:hover {
      color: #ff8c00;
      -webkit-transform: scale(1.1);
      -ms-transform: scale(1.0);
      transform: scale(1.0);
      transition: 0.5s ease;
  
}
.navbar-light .navbar-nav .nav-link {
      color: white;
}
.navbar-light .navbar-nav .nav-link:hover {
      color: #ff8c00;
      -webkit-transform: scale(1.1);
      -ms-transform: scale(1.4);
      transform: scale(1.03);
      transition: 0.5s ease;
}
.dropdown-item{
  font-family: 'Dosis', sans-serif;
  font-family: 'Oswald', sans-serif;
    color:white;
}
.dropdown-item:hover{
  font-family: 'Dosis', sans-serif;
  font-family: 'Oswald', sans-serif;
  color:#ff8c00;
  
}
.dropdown-menu{
      background-color: #000000;
  background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
}
/* navbar styles close */ 




      </style>
</body>