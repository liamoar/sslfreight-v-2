<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SSL Freight</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style2.css" rel="stylesheet">

    <style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}

    .logo {
       height: 38px;
        width: 80px;
    }
    </style>
</head>

<body>

    <!-- navbar-->
    <!--Main Navigation-->
<header class="backimg">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">
        <img src="img/sll.png" class="card-img-top logo"
                alt="photo"    >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Services.php">Services</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="ContactUs.php">Contact Us<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </ul>
          <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link s2l-color"><i class="fa fa-phone"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link s2l-color">+977-1-4781337</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="mask rgba-black-light flex-center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="holder">
             <h2 class="animated fadeIn mb-2 white-text">Contact us</h2>
             <div class="line"></div>
             <p class="animated fadeIn mb-2 white-text">The independent fast growing Freight in Nepal</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
<!--main navigation-->

 <!--content-->
  <div class="container" style="padding-top:30px; padding-bottom:30px;">
    <div class="row">
      <div class="col-md-12">
        <div class="page-title">
           <h2 class="page-title-copy">How to Reach Us</h2>
             <div class="line"></div>
        </div>
        <h3 class="contact-subtitle">DON'T WAIT A MINUTE WONDERING..</h3>
        <div class="row">
          <div class="col-sm-4">
            <div class="contact-address">
              <div class="contact-info" style="padding-left:40px;">
                <h3>
                  <i class="fa fa-road"></i>Address
                </h3>
                <h4>Buddhanagar, New Baneswor</h4>
                <h4>Kathmandu, Nepal</h4>
                <h4>Kathmandu 44600</h4>
                <address>M8MH+WF Kathmandu</address>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="contact-address">
              <div class="contact-info" style="padding-left:40px;">
                <h3>
                  <i class="fa fa-phone"></i>PHONE NUMBER
                </h3>
                <div class="tel-box">
                  <h4 >Operation Branch:</h4>
                   <address>+977-9851234330</address>
                   <address>+977-9818934330</address>
                  <h4>Marketing Branch:</h4>
                   <address>+977-9851234245</address>
                   <address>+977-9841741245</address>
                   <h4>Fax No:</h4>
                    <address>+977-1-4781337</address>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="contact-address">
              <div class="contact-info" style="padding-left:40px;">
                <h3>
                  <i class="fa fa-envelope"></i>Email
                </h3>
                <div class="tel-box">
                  <h4 >Operation Branch:</h4>
                   <address>arbin@sslfreight.com.np </address>

                  <h4>Marketing Branch:</h4>
                   <address>rammani@sslfreight.com.np </address>

                   <h4>Official:</h4>
                    <address>info@sslfreight.com.np</address>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="page-title">
           <h2 class="page-title-copy">Send us a Message</h2>
             <div class="line"></div>
      </div>
        <h3 class="contact-subtitle">FEEL FREE TO SEND US A MESSAGE AND EXPECT A REPLY WITHIN 2 BUSINESS DAY</h3>
    </div>
  </div>
  <!--mail templet-->
     <div class="row">
       <div class="col-sm-8 col-sm-offset-2">
         <!-- Default form contact -->
            <form class="text-center p-5" method="POST" action="mailer.php">

               <!-- Name -->
               <input type="text" name = "name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

               <!-- Email -->
               <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

               <!-- Subject -->

               <select class="browser-default custom-select mb-4" name="chooseOption" id="chooseOption">

                   <option value="Sea and Air Freight Enqueries" selected >Sea and Air Freight Enquiries</option>
                   <option value="Inland Enqueries" >Inland Enqueries</option>
                   <option value="Custom and Documentation" >Custom and Documentation</option>


               </select>

               <!-- Message -->
               <div class="form-group">
                   <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message" name="message"></textarea>
               </div>

               <!-- Send button -->
               <button class="btn btn-info btn-block" type="submit" name="submit" value="submit">Send</button>

            </form>
            <!-- Default form contact -->
       </div>
     </div>
  <!--mail templet end-->
</div>


 <!--content end-->
 <!--map-->
 <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14132.206027595068!2d85.3286299!3d27.6848029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1fe4285e87de7ff2!2sSSL+FREIGHT+PVT+LTD!5e0!3m2!1sen!2snp!4v1542190762471" width="99%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>



<!--Footer-->
<footer class="page-footer text-center text-md-left pt-4 ">

 <!--Call to action-->
 <div class="call-to-action text-center">
   <h4 class="my-4">SSL Freight</h4>
   <ul class="list-unstyled list-inline mb-4">
     <li>
       <h5 class="my-4">SSL Freight is  available 24/7 round the clock to assist  you.As we believe  one good customer service experience can change the entire perception a customer holds towards the organization.Do feel free to contact us if any assistance required</h5></li>
       <li><p style="letter-spacing: 2px;">"one stop logistic solution for Sea, Sky & Land."</p></li>

     <li class="list-inline-item"><a href="Services.php" class="btn btn-info waves-effect waves-light">Learn more</a></li>
   </ul>
 </div>

 <!--/.Call to action-->
<!-- Footer -->
<footer class="page-footer2 font-small special-color-dark pt-4">

 <!-- Footer Elements -->
 <div class="container">

   <!-- Social buttons -->
   <ul class="list-unstyled list-inline text-center">
     <li class="list-inline-item">
       <a class="btn-floating btn-fb mx-1" target="_blank" href="https://www.facebook.com/sslfreight.com.np/">
         <i class="fa fa-facebook"> </i>
       </a>
     </li>
     <li class="list-inline-item">
       <a class="btn-floating btn-gplus mx-1">
         <i class="fa fa-google-plus"> </i>
       </a>
     </li>
     <li class="list-inline-item">
       <a class="btn-floating btn-li mx-1">
         <i class="fa fa-linkedin"> </i>
       </a>
     </li>
     <li class="list-inline-item">
       <a class="btn-floating btn-dribbble mx-1">
         <i class="fa fa-skype"> </i>
       </a>
     </li>
   </ul>
   <!-- Social buttons -->




 </div>
 <!-- Footer Elements -->

 <!-- Copyright -->
 <div class="footer-copyright text-center py-3">© 2018 Copyright:
   <a href="https://mdbootstrap.com/education/bootstrap/"> SSL Fright</a>
 </div>
 <!-- Copyright -->

</footer></footer>
<!-- Footer -->







    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
