<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Diptour</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="./css/jquery-ui.css">
        <link href="./css/style.css" rel="stylesheet">

        <!--Start of Zendesk Chat Script-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <!--script src="https://kit.fontawesome.com/a076d05399.js"></script -->

        <link href="<?php echo base_url();?>css/newstyle.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/css/rearrange.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/css/neww.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/flight-style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css">
          <style>

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */

.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  align-items: center;
  border: 3px solid #f1f1f1;
  z-index: 9;
  width: 100%;
  padding-top: 0 auto;
  align-content: center;

}

/* Add styles to the form container */
.form-container {
  max-width: 400px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
    </head>
    <body>

        <section>
            <nav class="navbar navbar-expand-sm   sticky-top justify-content-between" style="background-color: black;">
                <a class="navbar-brand nav-desk" href="<?php echo base_url();?>">Nigeria's No.1 Tour Management Company</a>
                <form class="form-inline my-1">
                    <ul class="navbar-nav  ml-auto nav-desk-two nav-flex-icons">
                        <li class="nav-item ">
                            <form class="form-inline" style="height: 50%;">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-addon currency-symbol" style="margin-right: 5px; margin-top:5px; color:white;">₦</div>
                                    <input type="text" class="form-control currency-amount" id="inlineFormInputGroup" placeholder="0.00" size="8">
                                    <div class="input-group-addon currency-addon" >
                                        <select class="currency-selector" style="color: white; background-color: black; margin-top: 10px; ">
                                            <option  class="opt" data-symbol="₦" data-placeholder="0.00" selected >NGN </option>
                                            <option data-symbol="€" data-placeholder="0.00">EUR</option>
                                            <option data-symbol="£" data-placeholder="0.00">GBP</option>
                                            <option data-symbol="¥" data-placeholder="0">JPY</option>
                                            <option data-symbol="$" data-placeholder="0.00">CAD</option>
                                            <option data-symbol="$" data-placeholder="0.00">AUD</option>
                                            <option data-symbol="$" data-placeholder="0.00">USD</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript">
                                function updateSymbol(e) {
                                    var selected = $(".currency-selector option:selected");
                                    $(".currency-symbol").text(selected.data("symbol"))
                                    $(".currency-amount").prop("placeholder", selected.data("placeholder"))
                                    $('.currency-addon-fixed').text(selected.text())
                                }

                                $(".currency-selector").on("change", updateSymbol)

                                updateSymbol()
                            </script>
                        </li>
                        <li class="nav-item"> 
                            <div class="input-group-addon currency-addon" >
                                <select class="currency-selector" style="color: white; background-color: black; margin-top: 10px; ">
                                    <option  class="opt" data-symbol="₦" data-placeholder="0.00" selected >ENG</option>
                                    <option data-symbol="€" data-placeholder="0.00">ARABIC</option>
                                    <option data-symbol="£" data-placeholder="0.00">HINDI</option>
                                </select>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link"  href="" style="color: white;">|</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/diptourltd" style="color:white;"><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.twitter.com/diptourltd" style="color:white;"><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/diptourltd" style="color:white;"><i class="fa fa-instagram"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/company/dip-tour-ltd" style="color:white;"><i class="fa fa-linkedin"></i> </a>
                        </li>
                    </ul>
                </form>
            </nav>
        </section> 


        <div class="topnav">
            <div class="row">
                <div class="col-lg-4 col-6 ">
                    <img class="nav-img" src="./images/logo.png" alt=""/>
                </div>
                <div class="offset-lg-5 col-lg-3 col-6">
                    <ul style="list-style-type: none; margin-top: 30px; font-weight: bold;">
                        <li>Contact Us</li>
                        <li><?php  echo $contact_info[0]['phone_no_1']; ?></li>
                        <li><?php  echo $contact_info[0]['phone_no_2']; ?>{24/7,WHATSAPP}</li>
                        <li><?php  echo $contact_info[0]['phone_no_3']; ?></li>
                    </ul>
                </div>
            </div>
        </div>



        <section>

            <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: 0px;">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo "./".$banners[0]['banner1'];?>" alt="Los Angeles" width="2000" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo "./".$banners[0]['banner2'];?>" alt="Chicago" width="2000" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo "./".$banners[0]['banner3'];?>" alt="New York" width="2000" height="500">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev" style="height:40%;top:126px;">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next" style="height:40%;top:126px;">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>




            <nav class="navbar navbar-expand-sm navbar-ch navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarCustom">
                    <span class="rounded-bottom"></span>
                    <ul class="navbar-nav" style=" padding-left: 60px;">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url();?>" style="color: black;">HOME<span style="padding-left: 20px;">|</span></a>
                        </li>                      
                        <li class="nav-item">
                    
                            <a class="nav-link" href="<?php echo base_url();?>hotels" style="color: black;">HOTELS <span style="padding-left: 20px;">|</span></a>
                       
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>flight" style="color: black;">FLIGHTS<span style="padding-left: 20px;">|</span></a>
                            
                        </li>                        
                        <li class="nav-item">
                            
                            <a class="nav-link" href="<?php echo base_url();?>car-rental" style="color: black;">CAR RENTALS <span style="padding-left: 20px;">|</span></a>
                           
                        </li>                   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                TOUR PACKAGES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo base_url();?>TourPackageEnquiry">Asia</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>TourPackageEnquiry">Africa</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>TourPackageEnquiry">Europe</a>
                            </div>
                        </li>
                        <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                VISAS</a>                          
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <a class="dropdown-item" href="<?php echo base_url();?>Visa/visa_search">Search</a>
                                
                                <a class="dropdown-item" href="<?php echo base_url();?>Visa/visaquery">Visa Booking</a>
 
                                <a class="dropdown-item" href="<?php echo base_url();?>Visa/DubaiUAE">Dubai - UAE</a>                             
                            </div>                              
                        </li>
                    </ul>
                </div>
                <!--ul class="navbar-nav nav-flex-icons">
                    <?php if(isset($_SESSION['feusername'])){?>
                           <li> Welcome, <?php echo $_SESSION['fename']; ?>
                           <p> <a href="<?php echo base_url();?>Register/logout"> Logout </a>
                           </p>
                           </li>
                    <?php }else{?>
                    <a class="btn " role="button" style=" margin-left:40px; margin-right:0px; background-color: black; color:white;"  href="<?php echo base_url(); ?>Register/login"><i class="fa fa-lock xs-nav"></i>LOGIN</a>
                    <a href="<?php echo base_url(); ?>Register" class="btn " role="button" style=" margin-left:20px; margin-right:30px; background-color: green; color:white;"><i class="fa fa-user xs-naav"></i>REGISTER</a>
                <?php }?>
                </ul-->
            </nav>
        </section>

        <section class="newsletter">
            <div class="light-big">
                <div class="container newsletter-bg-colour" style="
                     background-color: #ffffff; margin-top: 280px;border-style: solid; padding-bottom: 20px;padding-top: 20px;
                     "> <form>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Keywords</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Keywords">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputPassword4">Category</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Category">
                            </div>

                            <div class="form-group col-md-1">
                                <label for="inputAddress">Duration</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Duration">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputAddress2">Date</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Date">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="inputCity">Min Price</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState">Max Price</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>



                            <div class="form-group col-md-2 ">
                                <a href="contact.html" class="theme-btn btn-2" role="button"  style="background-color: green; text-align: center;"   type="button">SEARCH</a>
                            </div>





                    </form></div></div></section>



    </section>
<section style="margin: 0 auto;">

    <div class="form-popup" id="myForm">
   <form action="<?php echo base_url();?>Register/login" id="user_login_form" autocomplete="off" onsubmit="return validate_user_login()" method="post" accept-charset="utf-8" class="form-container">
    <h1>Login</h1>

    <label for="email">Enter Your Registered Email Address</label>
    <input type="text" name="username" placeholder="Enter Your Registered Email Address" name="email" required>

    <label for="psw">Password</label>
    <input type="password" name="password" placeholder="Enter Password" name="psw" required>
    
    <div class="form-group">
<p class=""><input type="checkbox" name="remember" value="accept" checked="checked"  />
 Remember me 
 <a href="#" class="forgotPwd" style="float: right; ">Forgot Password?</a></p>
 </div> 
    <button type="submit" class="btn" style="background-color: orange; color: black;"><h5>Sign In</h5></button>
    <a href="<?php echo base_url(); ?>Register" class="btn" style="background-color: #fff; color: black; border: 1px solid orange;">REGISTER</a>
    
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


</section>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>






    <section class="container p-t-5 ">
        <div class="row" style="margin-top:120px; margin-bottom: 5px;border-radius: 5px solid ">
            <div class="col-lg-12">
                <h5 style="text-align: center;">W E L C O M E T O D I P T O U R T R A V E L</h5>

                <h1 style="text-align: center;">SPECIAL <span style="color:green;">TOUR</span> PACKAGE</h1>

                <p style="text-align: center;">Hot offers for the most amazing tours around world</p>


            </div>
        </div>
    </section>
    <section> 
        <div class="container">
            <h3 class="text-center my-3">TOP TRAVEL PRODUCTS</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-success mb-3">
                        <h5 class="card-header bg-success text-white" style="text-align: center;">--INBOUND TRAVEL PROCESS--</h5>
                        <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card1.jpg" style="width:100%">
                                <p class="card-text">Have the best of experience with seamless Nigerian-Inbound (Domestic) Travel Process - all in one package with inclusion on Nigerian Visa Facilitation / Visa Extension, Meet & Greet Services, Airport Transfers / Ground Transportation, Local Flight Schedules between Nigerian Cities, Hotel Accommodation, Nigerian Attractions & Tour Activities with Dip Tour certified and experience travel experts.</p>
                                <a href="https://www.diptourltd.com/contact-us" class="btn btn-success">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">---TRAVEL DEALS---</h5>
                            <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card2.jpg" style="width:100%">
                                <p class="card-text" style="padding-bottom: 25px;">Get your Local and International Flight Tickets seamlessly with best price guarantee on flight deals, promotional fares with easy ticket upgrade and real time flight change.</p>
                                
                                 <a href="<?php echo base_url('flight');?>" class="btn btn-success" style="margin-top: 115px;">GET LATEST UPDATES</a>
                        
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">---TRAVEL SIM CARD---</h5>
                            <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card_1.jpg" style="width:100%">
                                <p class="card-text"  style="padding-bottom: 3px;">Travel the world anytime having your own mobile number with you to connect with family, friends & Business associates. Sim Card possess $10 air time credit, UK & US telephone numbers. </p>
                                
                                <a class="btn btn-success" href="<?php echo base_url('TravelSimCard');?>" style="margin-top: 110px;">READ MORE</a>
                            
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:80px;">
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">--EDUCATIONAL, MEDICAL & SPORT TOURISM--</h5>
                            <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card4.jpg" style="width:100%">
                                <p class="card-text">
                                    <ul>
                                        <li>
                                    Study Abroad Today at your preferred academic institutions for skills improvement along the pathway of career development. <a href="https://www.diptourltd.com/educational-tourism/">BOOK NOW </a>
                                    </li>
                                    <li> Lets facilitate your medical trip to your preferred medical centre globally. Package are inclusive of admission into preferred hospitals + visa consultation + trip coordination. <a href="https://www.diptourltd.com/medical-tourism/">BOOK NOW </a>
                                    </li>
                                    <li>
                                    Become a Host, Participant or Observer through our sport tourism facilitator at any sporting event. <a href="https://www.diptourltd.com/sport-tourism/">BOOK NOW </a>
                                    </li>
                                   </ul>
                                </p>
                                <!--a href="#" class="btn btn-success">BOOK NOW</a-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center; padding-bottom: 35px;">---TOUR PACKAGES---</h5>
                            <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card5.jpg" style="width:100%">
                                <p class="card-text"   style="padding-bottom: 0px;">Get the best Ready or Custom Made Tour Package to your Preferred Destination at any given season inclusive of Flight + Hotel + Visa + Attractions/Activities + Ground Transportation + Dubai (UAE) Package + Many More suitable for Solo, Business and Group Travelers.</p>
                                <a href="<?php echo base_url();?>TourPackageEnquiry" class="btn btn-success" style="margin-top: 25px;">BOOK NOW</a>
                            </div>
                        </div>
                    </div><!--/.card-->
                
                <div class="col-md-4">
                    <div class="card border-success mb-3">
                        <h5 class="card-header bg-success text-white" style="text-align: center; padding-bottom: 35px;">--TRAVEL & HEALTH INSURANCE--</h5>
                        <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card6.jpg" width="100%">
                                <p class="card-text"  style="padding-bottom:45px;">In minutes, get your Travel Insurance which guarantee covers for emergency medical expenses abroad, travel delays, evacuation & repatriation, loss or delayed baggage, passport theft, free escort of beneficiary + many more.</p>
                               
                                <a class="btn btn-success" href="<?php echo base_url('TravelInsurance');?>" style="margin-top: 110px;">CONTACT US</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="container p-t-3">
        <div class="row" style="margin-top:50px; margin-bottom: 50px;">
            <div class="col-lg-12">
                <h3 style="text-align: center;">Recent Travel Packages

                </h3>
            </div>
        </div>
    </section>

    <section>
        <?php foreach($tour_packages as $k => $v){ 
            if($k == 0 OR  ($k % 3 == 0)){
            ?>
            <div class="container" >
                <div class="card-columns" >
            <?php                
                }
            ?>
                  <a href="<?php echo  base_url();?>/TourPackageEnquiry" >
                    <div class="card" style="width:300px;">
                    <img src="<?php echo base_url().$v['tour_image']; ?>">
                    <div class="off_div"><?php echo $v['duration']; ?></div>
                    <div class="card-block">
                        <h6 class="card-title"><?php echo $v['title'];?></h6>

                        <div class="container-fluid">
                            <div class="row ">
                                <div class="col-md-6">
                                    <i class="fa fa-star" aria-hidden="true" 
                                    style="<?php if($v['rating'] >=1 ){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <i class="fa fa-star" aria-hidden="true" style="<?php if($v['rating'] >=2 ){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <i class="fa fa-star" aria-hidden="true" style="<?php if($v['rating'] >=3){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <i class="fa fa-star" aria-hidden="true" style="<?php if($v['rating'] >=4 ){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <i class="fa fa-star" aria-hidden="true" style="<?php if($v['rating'] >=5){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <p class="card-text" style="margin-left:0; margin-top:5px;"><?php echo $v['no_of_reviews'];?> Reviews</p>                                 
                                </div>
                                <div class="col-md-6" >
                                    <small class="text-muted" style="float: right;">From </small><br/>
                                    <span style="float: right;">₹&nbsp; <?php echo $v['cost_per_head'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end of card-->
              </a>
            
                <?php 
                    if($k == 2 OR  $k == 5 OR $k == 8 OR $k == 11){
                    ?>
                    </div>
                        </div>
                    <?php                
                        }
                    }
                    ?>

    </section>
   <section>
<div class="container-fluid" style="background-color: white; margin-top: 30px; border: 2px solid green;">
<div class="row">
<div class="col-md-11">

<h2 style="  padding-top: 30px; padding-bottom: 30px; margin-left: 20px;">Cheap Flights from Nigeria</h2>

<div class="row">
<div class="col-md-3"> 
<ul  >
<h5><b>Asian Flights</b></h5>   
<li> 
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Dubai</a>
</li>                                     
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Abu Dhabi</a>
</li>
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to New Delhi</a>
</li>


</ul> 
</div>
<div class="col-md-3"> 
<ul>
<h5><b>North American Flights</b></h5>
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Atlanta</a>
</li>                                     
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Toronto</a>
</li>
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Houston</a>
 </li> 
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to New York</a>
</li> 

</ul>
</div>

<div class="col-md-3"> 
<ul >
<h5><b>African Flights</b></h5>
<li> 
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Accra</a>
</li>                                     
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Nairobi</a>
</li>
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Cape Town</a>
</li> 
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Johannesburg</a>
</ul>
</div>
<div class="col-md-3"> 
<ul >
<h5><b>European Flights</b></h5>
<li> 
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to London</a>
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Istanbul</a>
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Frankfurt</a>
</li> 
<li>
<a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Paris</a>
</li>                                                                               
</ul>
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-md-11">

<h4 style="  padding-top: 30px; padding-bottom: 30px; margin-left: 20px;">Cheap hotels in popular destinations</h4>

<div class="row">
<div class="col-md-3"> 
<ul  >
<h5><b>Asian Hotels</b></h5>   
<li> 
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Dubai</a>
</li>                                     
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Abu Dhabi</a>
</li>
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in New Delhi</a>
</li>


</ul> 
</div>
<div class="col-md-3"> 
<ul>
<h5><b>North American Hotels</b></h5>   
<li> 
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Atlanta</a>
</li>                                     
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Toronto</a>
</li>
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Houston</a>
</li> 
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in New York</a>
</li> 

</ul>
</div>

<div class="col-md-3"> 
<ul >
<h5><b>African Hotels</b></h5>
<li> 
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Accra</a>
</li>                                     
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Nairobi</a>
</li>
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Cape Town</a>
</li> 
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Johannesburg</a>
</li>                  
</ul>
</div>
<div class="col-md-3"> 
<ul >
<h5><b>European Hotels</b></h5>
<li> 
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in London</a>
</li>                                     
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Istanbul</a>
</li>
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Frankfurt</a>
</li> 
<li>
<a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Paris</a>
</li>  
</ul>
</div>

</div>
</div>
</div>
</div>


</section>



    <section class="container p-t-5 ">
        <div class="row" style="margin-top:100px; margin-bottom: 50px;border-radius: 5px solid ">
            <div class="col-lg-12">
                <h5 style="text-align: center;">W E L C O M E T O D I P T O U R T R A V E L</h5>

                <h1 style="text-align: center;">SPECIAL <span style="color:green;">TOUR</span> PACKAGE</h1>

                <p style="text-align: center;">Hot offers for the most amazing tours around world</p>


            </div>
        </div>
    </section>



      <section>
            <div class="container">
                <div class="row" >
                    <div class="col-md-4">
                        <div class="card" style="background-color: #D3D3D3;">
                            <div class="text-center">
                                <img class="card-img-top" src="./images/logo1.png" alt="Card image top" style="height: 73px; width: 100px;  padding-top: 20px;" >
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">24/7 CUSTOMER SUPPORT</h6>

                                <p class="card-text" style="font-size: 11px;">Get assistance 24/7 on any kind of travel related
                                    query. We are happy to assist you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="background-color: #D3D3D3">
                            <div class="text-center">
                                <img class="card-img-top" src="./images/logo1.png" alt="Card image top" style="height: 73px; width: 100px;  padding-top: 20px;">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">EXCELLENT DELIVERABLES</h6>

                                <p class="card-text" style="font-size: 11px;">Get assistance 24/7 on any kind of travel related
                                    query. We are happy to assist you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="background-color: #D3D3D3;">
                            <div class="text-center">
                                <img class="card-img-top" src="./images/logo1.png" alt="Card image top" style="height: 73px; width: 100px;  padding-top: 20px;">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">CAR LEASE DISPLAY</h6>

                                <p class="card-text" style="font-size: 11px;">Get assistance 24/7 on any kind of travel related
                                    query. We are happy to assist you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!--<section style="padding-left: 40px;padding-right: 40px; margin-top: 50px;">
       
         <div class="container-fluid" style="background-color: white;">
        
                <div class="row" style="padding-top: 50px; border: 4px solid green;">
    
                   <div class="col-md-5">
                    <h2 class="let_text">Lets get Started ?</h2>
                    <p class="let_des">Whether you are booking a plane ticket,looking for a hotel room,need help with viasas or want to insure your trip</p><p class="help_text">Need Help?</p>
                  </div>
                
                  <div class="col-md-7">
                    <div class="row" style="padding-left: 100px;">
    
                    <div class="col-md-2">
                      <div class="col_box" style="padding-bottom: 20px;">
                        <img class="img-responsive " src="./images/c1.png"><p>Best Price</p>
                      </div>
                    </div>
    
                    <div class="col-md-2">
                      <div class="col_box" style="margin-left:60px; padding-bottom: 20px;">
                        <img class="img-responsive " src="./images/c2.png"><p>Easy Booking</p>
                      </div>
                    </div>
                 
                  
                    <div class="col-md-2">
                      <div class=" col_box" style="margin-left: 120px; padding-bottom: 20px;"><img class="img-responsive " src="./images/c3.png"><p>Trust &amp; Safety</p></div>
                    </div>
                   
                      </div>
                       <div class="row" style="padding-left: 100px;">
                    <div class="col-md-2">
                      <div class="col_box">
                        <img class="img-responsive " src="./images/c4.png"><p>24/7 Customer Support</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="col_box" style="margin-left:60px; padding-bottom: 20px;">
                        <img class="img-responsive " src="./images/c2.png"><p>Excellent Deliverables</p>
                      </div>
                    </div>
                 
                  
                    <div class="col-md-2">
                      <div class=" col_box" style="margin-left: 120px;  padding-bottom: 20px;"><img class="img-responsive " src="./images/c2.png"><p>Car Lease Display</p></div>
                    </div>
                    <div class="col-md-offset-2"></div>
                      </div>
                    </div>
                  </div>
    
             
                    
    </section>-->




    <section>
        <div class="container">
            <div class="top text-center">

            </div>
        </div>
        <hr />
        <br />
        <div class="container">
            <div class="text-area text-center">
                <h1 style="color:green;">Our Customers Are Seeing Big Results</h1>
            </div>

            <div class='row'>
                <div class='col-md-8 offset-lg-2'>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">

                            <!-- Quote 1 -->
                            <div class="carousel-item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-1 ">
                                            <img src="./images/test1.jpg" style="margin-right:20px;"></div>
                                        <div class="col-9 offset-2">

                                            <p style="margin-top: 20px;">''These guys are cool with time management when it comes to complex travel arrangement. I do recommend their service to any corporate.''</p>

                                            <small>- Bakare Joseph - Google Map Nigeria</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>

                            <div class="carousel-item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-1 ">
                                            <img src="./images/test2.jpg" style="margin-right:20px;"></div>
                                        <div class="col-9 offset-2">
                                            <p>''Dip Tour coordinates all our traveling plans from successful visa entry, flight, accommodation, ground transportation and other travel amenities, just name it. We really have never sweat it. Chris or Frida are always a call away''</p>
                                            <small>- Jude Iyhobhebhe - COO, Meridian Energy </small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>

                            <div class="carousel-item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-1 ">
                                            <img src="./images/test3.png" style="margin-right:20px;"></div>
                                        <div class="col-9 offset-2">
                                            <p>"Oh yes, all the way from Europe, i and my team toured Nigeria in about 2 to 3 weeks touching many attractions at same time. Thanks to the Dip Tour team for such a remarkable & well detailed arrangement towards making history. "</p>
                                            <small>- Elvis & John Adeba - Cloveebiz Limited</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="carousel-item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-10 offset-1">
                                            <p>"Their passion in contributing their quota to the promotion of tourism is quite huge. Their team are professionals who knows their opinions."
                                            </p>
                                            <small>- Amao Nurudeen - Deputy Leader, Eti Osa Local Government</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div> 

                            <div class="carousel-item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-10 offset-1">
                                            <p>"I really recommend you guys for the credible and unprecedented attention you accorded my request. You guided i and family to a successful Canadian visa application process, flight, accommodation, tour activities and even a travel sim to keep me in constant communication with my friends in Nigeria. The best part was it was within my budget."
                                            </p>
                                            <small>- Elvis & John Adeba - Cloveebiz Limited</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div> 
                            <!-- .item -->

                        </div> <!-- .carousel-inner -->
                    </div>  <!-- #my-carousel -->
                </div>
            </div>
        </div>


        <hr style="border:2px solid green;">


        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <script>$('#myCarousel').carousel({
                                    interval: 3000
                                });

                                window.sr = ScrollReveal({reset: true});

                                sr.reveal('.company-stuff', {duration: 700});</script>
    </section>
    <div class="text-area text-center">
        <h1 style="color:green; margin-bottom: 20px;">Our Partners</h1>
    </div>
    <section class="customer-logos slider"  style="margin-bottom: 40px;">
        <?php foreach($partner_details as $k => $v){ ?>
            <div class="slide"><img src="<?php echo $v['file_path']; ?>" /></div>
        <?php } ?>
        <?php foreach($partner_details as $k => $v){ ?>
            <div class="slide"><img src="<?php echo $v['file_path']; ?>" /></div>
        <?php } ?>  
    </section>
        <footer class="mainfooter" role="contentinfo" style="margin-top: 0px;">
        <div class="footer-middle">
            <div class="container" >
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <img class="" src="./images/l2.png">

                            <?php echo $footer_info;?>
                            <ul class="list-unstyled">
                                <li><a href="#"></a></li>
                                <li>Address: Suite 7, Block 1, Bar Beach Towers, Bishop Oluwole &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Street Victoria Island, Lagos (LandMark: Eko Atlantic)</li>
                                <li><?php  echo $contact_info[0]['phone_no_1']; ?><br/><?php  echo $contact_info[0]['phone_no_2']; ?></li>
                                <li><a href="#">Email: <?php  echo $contact_info[0]['phone_no_3']; ?></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h6 ><u style="color:white; ">COMPANY INFO</u></h6>
                            <ul class="list-unstyled" style="margin-top: 25px; margin-right: 20px;">
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="<?php echo base_url();?>About">About us</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="<?php echo base_url();?>ServicesProvided">Services</a></li>

                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="<?php echo base_url();?>OurPrivacyPolicy">Privacy Policy</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="<?php echo base_url();?>Network">Our Network</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="https://www.diptourltd.com/contact-us">Contact</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <!--Column1-->

                        <h6 ><u style="color:white; ">POPULAR LINKS</u></h6>
                        <ul class="list-unstyled" style="margin-top: 30px; margin-left: 0">
                            <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="<?php echo base_url(); ?>Blog">Blog</a></li>
                            <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">FAQ</a></li>
                            <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Terms & Conditons</a></li>

                            <li>
                                <a href="#"></a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-3">
                        <h6 ><u style="color:white; padding-left: 100px;">NEWSLETTER</u></h6>
                        <div class="new">
                            <div class="row">

                                <div class="content">
                                    <p>You can get latest update from us by subscribing to
                                        our newsletter.</p>  <div class="input-group">

                                        <input type="email" class="form-control" placeholder="Name/Telephone">
                                        <span class="input-group-btn">
                                            <button class="btn" type="submit">Subscribe</button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div> <div class="social" style="margin-top: 20px;">
                            <h6 style="padding-left: 70px;"><u style="color:white;" >GET CONNECTED</u></h6>
                            <a href="https://www.facebook.com/diptourltd" class="fa fa-facebook"></a>
                            <a href="https://www.twitter.com/diptourltd" class="fa fa-twitter"></a>
                            <a href="https://www.youtube.com/user/diptourltd" class="fa fa-youtube"></a>
                            <a href="https://www.linkedin.com/company/dip-tour-ltd" class="fa fa-linkedin"></a>
                            <a href="#" class="fa fa-google-plus"></a> 
                            <a href="https://www.instagram.com/diptourltd" class="fa fa-instagram"></a>  
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2019 - DIPTOUR  All rights reserved.</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>

    <script type="text/javascript">$(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }]
            });
        });</script>
</body>
</html>
