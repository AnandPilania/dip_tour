<!-- Start page content wrapper -->
        <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">
             
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>Dashboard <small>Control panel</small></h2>
                        <ol class="breadcrumb">
                            <li> <a href="index.html">Home</a> </li>
                            <li class="active"><a href="dash1.html"> <strong>Dashboard</strong> </a></li>
                        </ol>
                    </div>
                </div>
                <div class="wrapper-content ">

                    <!-- Start Widgets -->

                    <div class="row">
                        <!-- begin col-3 -->
                       <h3> Contact Us
 
</h3>
<section class="contact-wrap"> <style type="text/css">//import font from google
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900);

//import compass
@import "compass";

//colors
$primary-color   : #FF512F;
$secondary-color : #333;
$form-bg         : #fff;



//tablet and above devices
@media (min-width: 768px) { 
  .contact-wrap{
    width: 60%;
    margin: auto;
  }
}




//////////////////////////
  /*----page styles---*/
//////////////////////////
body{
  @include background-image(linear-gradient(to right, $primary-color, #DD2476));
  font-family: 'Roboto', sans-serif;
}
.contact-wrap{
  padding: 15px;
}

h3{
  background-color: white;
  color: lighten($primary-color, 10%);
  padding: 40px;
  margin: 0 0 50px;
  font-size: 30px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  small{
    font-size: 18px;
    display: block;
    text-transform: none;
    font-weight: 300;
    margin-top: 10px;
    color: lighten($primary-color, 10%);
  }
}



</style>


  
</section>

<!-- follow me template -->

                   <section> <style type="text/css">.input,
.submit {
    display: inline-block;
    padding: 10px 15px;
    font-size: 20px;
    border-radius: 0;
    -webkit-appearance: none;
}

.input {
    border: 1px solid lightgray;
}

.submit {
    background-color: lightgreen;
    /**
     * If the input field has a border,
     * you need it here too to achieve equal heights.
     */
    border: 1px solid transparent;
}

/**
 * Firefox Fix
 * Without that the submit button will be too high.
 */
.submit::-moz-focus-inner { 
    border: 0;
}</style>          <h2><?php echo $this->session->flashdata('item'); ?></h2> 
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                        <form action="<?php echo base_url('/Dashboard/addContactInfo'); ?>" method="post">

                        <input class="submit" type="text" value="Phone 1">
                        <?php if(!empty($data['phone_no_1'])){ ?>
                            <input class="input" type="text" placeholder="" value="<?php echo $data['phone_no_1'];?>" name="phone_no_1">
                        <?php }else {?>
                           <input class="input" type="text" placeholder="" name="phone_no_1">
                        <?php } ?>


</div>
                  <div class="col-md-2"></div>
                  </div>
               
                <br/> <br/>
                   <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">

                        <input class="submit" type="text" value="Phone 2">
                        <?php if(!empty($data['phone_no_2'])){ ?>
                            <input class="input" type="text" placeholder="" value="<?php echo $data['phone_no_2'];?>" name="phone_no_2">
                        <?php }else {?>
                           <input class="input" type="text" placeholder="" name="phone_no_2">
                        <?php } ?>

    
</div>
                  <div class="col-md-2"></div>
                  </div>

                   <br/> <br/>
                   <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                      
                        <input class="submit" type="text" value="Phone 3">
                        <?php if(!empty($data['phone_no_3'])){ ?>
                            <input class="input" type="text" placeholder="" value="<?php echo $data['phone_no_3'];?>" name="phone_no_3">
                        <?php }else {?>
                           <input class="input" type="text" placeholder="" name="phone_no_3">
                        <?php } ?>
    

    
</div>  
                  <div class="col-md-2"></div>
                  </div>
                   <br/><br/>
                 <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                       
                        <button class="submit" type="submit" value="Update" style=" margin-left: 200px;">
                          Update
                        </button>
    
    

    
</div>
                  <div class="col-md-2"></div>
                  </div>
                 
                  </div> 

                   </section>
                   

                   
                    </div>
                   
                    <!-- End Widgets -->

                </div>
                <!-- /wrapper-content -->