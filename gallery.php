<!--gallery section-->
<html>
<head>
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/fonts.css">
</head>
<body>
<div class="row_g ">
<div class="gallery_font">
  <h1 >Gallery</h1>
</div>
  <div class="column_gm">
         
      <img src="images/gallery1.jpg" class="img-thumbnail model-img  hover-shadow cursor rounded mx-auto d-block"  onclick="openModal();currentSlide(1)">
  </div>
  <div class="column_gm">
    <img src="images/gallery2.jpg"onclick="openModal();currentSlide(2)" class="img-thumbnail model-img  hover-shadow cursor rounded mx-auto d-block">
  </div>
  <div class="column_gm">
    <img src="images/gallery3.jpeg" onclick="openModal();currentSlide(3)" class="img-thumbnail model-img  hover-shadow cursor rounded mx-auto d-block">
  </div>
  <div class="column_gm">
    <img src="images/gallery4.JPEG"  onclick="openModal();currentSlide(4)" class="img-thumbnail model-img hover-shadow cursor rounded mx-auto d-block">
  </div>

  <div class="column_gm">
         
      <img src="images/gallery5.jpeg" class="img-thumbnail model-img  hover-shadow cursor rounded mx-auto d-block"  onclick="openModal();currentSlide(5)">
  </div>
  <div class="column_gm">
    <img src="images/gallery6.jpeg"onclick="openModal();currentSlide(6)" class="img-thumbnail model-img  hover-shadow cursor rounded mx-auto d-block">
  </div>
  <div class="column_gm">
    <img src="images/gallery7n.jpg" onclick="openModal();currentSlide(7)" class="img-thumbnail model-img  hover-shadow cursor rounded mx-auto d-block">
  </div>
  <div class="column_gm">
    <img src="images/gallery8.JPEG"  onclick="openModal();currentSlide(8)" class="img-thumbnail model-img hover-shadow cursor rounded mx-auto d-block">
  </div>
</div>

<div id="myModal" class="modal_g">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content_g">

    <div class="mySlides_g">
      <div class="numbertext">1 / 8</div>
      <img src="images/gallery1.jpg">
    </div>

    <div class="mySlides_g">
      <div class="numbertext">2 / 8</div>
      <img src="images/gallery2.jpg" >
    </div>

    <div class="mySlides_g">
      <div class="numbertext">3 / 8</div>
      <img src="images/gallery3.jpeg" >
    </div>
    
    <div class="mySlides_g">
      <div class="numbertext">4 / 8</div>
      <img src="images/gallery4.JPEG"  >
    </div>

    <div class="mySlides_g">
      <div class="numbertext">5 / 8</div>
      <img src="images/gallery5.jpeg">
    </div>

    <div class="mySlides_g">
      <div class="numbertext">6 / 8</div>
      <img src="images/gallery6.jpeg"  >
    </div>

    <div class="mySlides_g">
      <div class="numbertext">7 / 8</div>
      <img src="images/gallery7n.jpg">
    </div>
    
    <div class="mySlides_g">
      <div class="numbertext">8 / 8</div>
      <img src="images/gallery8.JPEG" >
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>



  </div>
</div>


<!--end gallery-->

<!--end gallery-->


<!--gallery script-->
<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides_g");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>
<!--gallery script close-->
<style>
/*gallery styles*/ 
.gallery_font h1{
  font-family: 'Roboto', sans-serif;
  font-family: 'Galada', cursive;
  font-family: 'Lobster Two', cursive;
  margin-top:16rem;
  margin-bottom: 7rem;
  text-align:center;
  font-size: xxx-large;
} 
 * {
    box-sizing: border-box;
}
  
  .row_g > .column_g {
    padding: 0 8px;
  }
  .row_g > .column_gm {
    padding: 0 8px;
  }
  
  .row_g:after {
    content: "";
    display: table;
    clear: both;
  }
  .column_gm img{
    width:304px;
    height:206px;
  }
  .column_g img{
    margin-bottom: 20px;
  }
  .column_g {
    float: left;
    width: 25%;
  }
  .column_gm {
    float: left;
    width: 25%;
    margin-bottom: 2em;
  }
  .column_gm:hover{
      -webkit-transform: scale(1.1);
      -ms-transform: scale(1.4);
      transform: scale(1.1);
      transition: 0.3s ease;
  }
  
  /* The Modal (background) */
  .modal_g {
    display: none;
    position: fixed;
    z-index: 1030;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
  }
  /* rsponsiveness of photos*/
  @media screen and (max-width: 910px) {
  .column_gm  {
    width: 50%;
    margin-bottom: 20px;
  }
  .column_gm img{
    width: 158px;
    height: 86px;
  }
 
  
}
@media screen and (max-width: 900px) {
  .column_g  {
    width: 50%;
  }
  .column_g img{
    width:106px;
    height:75px;
  }
  
}
.img-thumbnail{
  cursor: pointer;
}
  /* Modal Content */
  .modal-content_g {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }
  
  /* The Close Button */
  .close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }
  
  .mySlides_g {
    display: none;
  }
  
  .cursor {
    cursor: pointer;
  }
  
  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  img {
    margin-bottom: -4px;
  }
  
  .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }
  
  .demo {
    opacity: 0.6;
  }
  
  .active,
  .demo:hover {
    opacity: 1;
  }
  
  img.hover-shadow {
    transition: 0.3s;
  }
  
  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .mySlides_g img{
    width:100%;
    height: 86vh;
  }
@media only screen and (max-width: 500px){
  .mySlides_g img{
    width:100%;
    height: 45vh;
  }
 }
  /* gallery styles close */
</style>
</body>
</html>