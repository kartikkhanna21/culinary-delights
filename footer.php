<!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com ) -->
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/fonts.css">
   <link rel="stylesheet" href="css/animate.css">
	<meta name="keywords" content="footer, address, phone, icons" />

	<title>Footer With Address And Phones</title>
	
</head>

	<body>
		<footer class="footer-distributed">

			<div class="footer-left">
      
				<h3>Contact<span> Details</span></h3>

             



<p class="text-color_f"><span class="icon icon-color"><i class="fas fa-map-marker-alt"></i></span> 67 Coker Rd, Ilupeju, Lagos, Nigeria</p>

<p class="text-color_f"><span class="icon icon-color"><i class="fas fa-phone-square"></i></span> 0802 801 7444</p>

<p class="text-color_f"><span class="icon icon-color"><i class="fas fa-envelope"></i></span> customercare@culinarydelightsng.com </p>


        <a class="navbar-brand_foot brand_foot" style="text-decoration: none;" href="index.php">Culinary Delights</a>
			</div>

			

			<div class="footer-right">



<!-- <br>

<br> -->

<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7317781565616!2d3.3601270142666584!3d6.555506324610365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d767ee656e9%3A0x711a73ff51e44cb7!2sCulinary+Delights!5e0!3m2!1sen!2sin!4v1550661429360" width="100%" height="316" frameborder="0" style="border:0" allowfullscreen></iframe> -->



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.73173386999!2d3.360160514030094!3d6.555511895258661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d155cad6837%3A0x412e81367600b471!2sPizza+King!5e0!3m2!1sen!2sin!4v1559324168693!5m2!1sen!2sin" width="100%" height="316" frameborder="0" style="border:0 mx-auto d-block" allowfullscreen></iframe>

				</div>

			</div>

		</footer>

	</body>

</html>

<style>

.brand_foot{
	font-family: 'Oswald', sans-serif;
    font-family: 'Dosis', sans-serif;
      
}
.navbar-brand_foot {
     color: #ff8c00;
     font-size:xx-large;
}
.navbar-brand_foot:hover {
    color: #ff8c00;
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.1);
     transition: 0.5s ease;
               

}

body {
	margin: 0;
	padding: 0;
}
footer{
	bottom: 0;
}
.footer-distributed{
    background-color: #000000;
      background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}
@media (min-width: 1800px) {
	.footer-distributed{
	min-height:40vh;
	}

}

.footer-distributed .footer-left,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

.footer-distributed .footer-left{
	width: 45%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #ff8c00;
}


.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}





.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}



.footer-distributed .footer-right{
	width: 45%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;

	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}


@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}
	.main {
		line-height: normal;
		font-size: auto;
	}

}
.icon-color{
    color:white;
}
.text-color_f{
    color:white;
    margin-top:2rem;
	font-family: 'Roboto', sans-serif;
   font-family: 'Galada', cursive;
   font-family: 'Lobster Two', cursive;
   font-family: 'Quicksand', sans-serif;
}
</style>
