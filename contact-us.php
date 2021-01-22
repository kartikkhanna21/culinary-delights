<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <title>Culinary Delights</title>
    </head>
    


    <body  class="slideInDown animated">
        <?php include 'header.php'; ?>
 
        <!DOCTYPE html>





<div class="row" id="contatti">
<div class="container mt-5" >

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.73173386999!2d3.360160514030094!3d6.555511895258661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d155cad6837%3A0x412e81367600b471!2sPizza+King!5e0!3m2!1sen!2sin!4v1559324168693!5m2!1sen!2sin" frameborder="0" style="border:0 mx-auto d-block" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold text-white">ENQUIRY FORM</h2>
        <form class="" method="post">
          <div class="row">
          <div class="col-12">
              <div class="form-group">
              <input type="text" class="form-control mt-2 name-text ip-font"  id="defaultContactFormName" placeholder="Full Name" required>
              </div>
            </div>
        
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2 ip-font" id="defaultContactFormEmail" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" class="form-control mt-2 ip-font"  id="defaultContactFormEmail" placeholder="Phone no" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control ip-font" id="exampleFormControlTextarea2" rows="3"  placeholder="Address" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control ip-font" id="exampleFormControlTextarea2" rows="3" placeholder="Message" rows="3" required></textarea>
              </div>
            </div>
        
       
          </div>
          <div class="text-center">
              <button class="btn btn-outline-danger button-contact" type="submit">Submit</button>
        </div>
        </form>
        
        <div class="text-white">
        <p class="text-color_f"><span class="icon icon-color"><i class="fas fa-map-marker-alt"></i></span> 67 Coker Rd, Ilupeju, Lagos, Nigeria</p>

<p class="text-color_f"><span class="icon icon-color"><i class="fas fa-phone-square"></i></span> 0802 801 7444</p>

<p class="text-color_f"><span class="icon icon-color"><i class="fas fa-envelope"></i></span> customercare@culinarydelightsng.com </p>
        </div>
      </div>

    </div>
</div>
</div>
</div>

<style>

.text-white{
  font-family: 'Oswald', sans-serif;
  font-family: 'Dosis', sans-serif;
  text-align:center;
}
.ip-font{
  font-family: 'Oswald', sans-serif;
  font-family: 'Dosis', sans-serif;
  font-weight: bold;
}
.text-white p{
  font-family: 'Oswald', sans-serif;
  font-family: 'Dosis', sans-serif;
  text-align:center;
  font-size:large;
}
    #contatti{
    background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
    
  }
#contatti a{
  color: #fff;
  text-decoration: none;
}


@media (max-width: 575.98px) {

  #contatti{padding-bottom: 800px;}
  #contatti .maps iframe{
    width: 100%;
    height: 450px;
  }
 }


@media (min-width: 576px) {

   #contatti{padding-bottom: 800px;}

   #contatti .maps iframe{
     width: 100%;
     height: 450px;
   }
 }

@media (min-width: 768px) {

  #contatti{padding-bottom: 350px;}

  #contatti .maps iframe{
    width: 100%;
    height: 850px;
  }
}

@media (min-width: 992px) {
  #contatti{padding-bottom: 200px;
  min-height:100vh;}

   #contatti .maps iframe{
     width: 100%;
     height: 700px;
   }
}


#author a{
  color: #fff;
  text-decoration: none;
    
}

.footer {
    
    background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
   position: fixed;
   left: 0;
   bottom: 0;
   height: 45px;
   width: 100%;
   text-align: center;
}
.con-foot-text{
    color: #ff8c00;
    font-size:x-large;
    margin-top:2rem;
    text-decoration:none;
}

.con-foot-text:hover{
    text-decoration:none;
    color: #ff8c00;
    -webkit-transform: scale(1.1);
      -ms-transform: scale(1.4);
      transform: scale(1.3);
      transition: 0.5s ease;
}
@media (max-width: 500px){
  .form-control {
    margin-left: 2rem;
    display: block;
    width: 85%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
}
.button-contact{
  margin-bottom: 1rem;
    padding-left: 2rem;
    padding-right: 2rem;
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
}

</style>
    </body>

</html>