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
                       <h3> Tour Packages
 
</h3>
<section class="contact-wrap"> <style type="text/css">//import font from google
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900);

//import compass
@import "compass";

//colors
$primary-color   : #FF512F;
$secondary-color : #333;
$form-bg         : #fff;


//contact form
.contact-form{
    margin-top: 30px;
    .input-block{
        background-color: rgba(white, .8);
        border: solid 1px $primary-color;
        width: 100%;
        height: 60px;
        padding: 25px;
        position: relative;
        margin-bottom: 20px;
        @include transition(all 0.3s ease-out);
        &.focus{
            background-color: $form-bg;
            border: solid 1px darken($primary-color, 10%);
        }
        &.textarea{
            height: auto;
            .form-control{
                height: auto;
                resize: none;
            }
        }
        label{
            position: absolute;
            left: 25px;
            top: 25px;
            display: block;
            margin: 0;
            font-weight: 300;
            z-index: 1;
            color: $secondary-color;
            font-size: 18px;
            line-height: 10px;
        }
        .form-control{
            background-color: transparent;
            padding: 0;
            border: none;
            @include border-radius(0);
            @include box-shadow(none);
            height: auto;
            position: relative;
            z-index: 2;
            font-size: 18px;
            color: $secondary-color;
        }
        .form-control:focus{
            label{
                top: 0;
            }
        }
    }
    .square-button{
        background-color: rgba(white, .8);
        color: darken($primary-color, 10%);
        font-size: 26px;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
        @include border-radius(2px);
        @include transition(all 0.3s ease);
        padding: 0 60px;
        height: 60px;
        border: none;
        width: 100%;
        &:hover,
        &:focus{
            background-color: white;
        }
    }
}

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



</style><h2><?php echo $this->session->flashdata('item'); ?></h2> 
  <form class="contact-form" enctype="multipart/form-data" action="<?php echo base_url();?>Dashboard/updateUserDetails" method="post">
	<?php
					
			 foreach($data as $k=> $val)  {
				//print_r($val);die;			
                             ?>   
   <div class="row">
    <div class="col-md-4 col-12">
       <div class="form-group">
        <label for="">Salutation</label>
        <input type="text" class="form-control" name="salutation" value="<?php echo $val['salutation'] ?>" required>
		<input type="hidden" name="id" value="<?php echo $val['id'] ?>" />
      </div>
    </div>
	<div class="col-md-4 col-12">
     <div class="form-group">
        <label for="">First name</label>
        <input type="text" class="form-control" name="fname" value="<?php echo $val['first_name'] ?>" required >
      </div>
    </div>
  </div>
  </br></br>
    <div class="row">
    <div class="col-md-4 col-12">
       <div class="form-group">
        <label for="">middle name</label>
        <input type="text" class="form-control" name="mname" value="<?php echo $val['middle_name'] ?>" required>
      </div>
    </div>
	<div class="col-md-4 col-12">
     <div class="form-group">
        <label for="">Last name</label>
        <input type="text" class="form-control" name="lname" value="<?php echo $val['last_name'] ?>" required >
      </div>
    </div>
  </div>
   </br></br>
    <div class="row">
    <div class="col-md-4 col-12">
       <div class="form-group">
        <label for="">Login Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $val['login_email'] ?>" required>
      </div>
    </div>
	<div class="col-md-4 col-12">
     <div class="form-group">
        <label for="">Contact number</label>
        <input type="text" class="form-control" name="phone" value="<?php echo $val['cell_phone'] ?>" required >
      </div>
    </div>
  </div>
   </br></br>
    <div class="row">
    <div class="col-md-4 col-12">
       <div class="form-group">
        <label for="">Company name</label>
        <input type="text" class="form-control" name="company_name" value="<?php echo $val['company_name'] ?>" required>
      </div>
    </div>
	<div class="col-md-4 col-12">
     <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control" name="address" value="<?php echo $val['address'] ?>" required >
      </div>
    </div>
  </div>
   </br></br>
    <div class="row">
    <div class="col-md-4 col-12">
       <div class="form-group">
        <label for="">City</label>
        <input type="text" class="form-control" name="city" value="<?php echo $val['city'] ?>" required>
      </div>
    </div>
	<div class="col-md-4 col-12">
     <div class="form-group">
        <label for="">State</label>
        <input type="text" class="form-control" name="state" value="<?php echo $val['state'] ?>" required >
      </div>
    </div>
  </div>
   </br></br>
    <div class="row">
    <div class="col-md-4 col-12">
       <div class="form-group">
        <label for="">Country</label>
        <input type="text" class="form-control" name="country" value="<?php echo $val['country'] ?>" required>
      </div>
    </div>
	<div class="col-md-4 col-12">
     <div class="form-group">
        <label for="">Zip code</label>
        <input type="text" class="form-control" name="zip_code" value="<?php echo $val['zip_code'] ?>" required >
      </div>
    </div>
  </div>
   </br></br>
  <div class="row">
    <div class="col-md-4 col-12">
     <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" name="password" value="<?php echo $val['password'] ?>" required >
      </div>
	  </div>
	   <div class="col-md-4 col-12">
      <div class="form-group">
        <label for="">I Agree</label>
        <input type="text" class="form-control" name="terms" value="<?php echo $val['i_agree'] ?>" required>
      </div>
    </div>
    </div>
	 </br></br>
 
  <div class="row">
    <div class="col-sm-12">
     <div class="input-block"> 
      <style type="text/css">

        #file--input {
          margin-bottom: 1rem;
          background: blue;
          height: 100%;
          display: none;
        }

        .button {
          display: inline-block;
          padding: 1.5rem;
          background: #34495e;
          color: #fff;
          font-weight: 900;
          text-transform: uppercase;
          border-radius: 5px;
          margin-left: .6rem;
          margin-top: 50px;
          &:hover {
            background: #2c3e50;
            cursor: pointer;
          }
        }
      </style>
    <!--label for="file--input" class="button">UPLOAD PARTNER LOGO</label -->
</div>
</div>
</div>
<br/>
<br/>
<br/>
  <div class="row">

    <div class="col-sm-4 col-12">
     <div class="form-group">
        <label for="">Upload Image</label>

          <input type="file" id="fileinput" class="form-control" name ="tour_image" value="<?php echo $val['file_path'] ?>" required>
      <!--button class="square-button" style="margin-top: 30px; padding-bottom: 20px; padding-top: 20px;">Note: Partner Logo Image Size:</button-->
      </div>
    </div>
			
    <div class="col-sm-4">
      <button class="button" type="submit" style="margin-top: 30px; padding-right: 20px; padding-left: 20px;">Save</button>
    </div>
  </div>
   <?php }?>
  </form>
</section>

<!-- follow me template -->
<hr>
<section>
  <div class="row">
    <h2>Tour Packages List</h2>
    <br>
    <?php $table_headers = array_keys(max($data)); ?>
    <div class="container-fluid" >
     <div class="col-lg-12">
     
     </div>
   </div>
  </div>
</section>

                   
                   

                   
                    </div>
                   
                    <!-- End Widgets -->

                </div>
                <!-- /wrapper-content -->
<script type="text/javascript">$(document).ready(function() {
    var table = $('#tour_packages').DataTable( {       
        scrollX:        true,
        scrollCollapse: true,
        autoWidth:         true,  
         paging:         true,       
        columnDefs: [
        { "width": "150px", "targets": [0,1] },       
        { "width": "40px", "targets": [4] }
      ]
    } );
} );</script>