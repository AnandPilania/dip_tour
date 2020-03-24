<!-- Start page content wrapper -->
        <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">
             
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>Dashboard <small>Control panel</small></h2>
                        <ol class="breadcrumb">
                            <li> <a href="index.html">Home</a> </li>
                            <li class="active"><a href="<?php echo base_url('Dashboard');?>"> <strong>Dashboard</strong> </a></li>
                        </ol>
                    </div>
                </div>
                <div class="wrapper-content ">

                    <!-- Start Widgets -->

                    <div class="row">
                        <!-- begin col-3 -->
                       <h3> CMS &nbsp;   Our Partner
 
</h3>
<section class="contact-wrap"> <style type="text/css">
  //import font from google
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
  <form class="contact-form" enctype="multipart/form-data" action="<?php echo base_url();?>Dashboard/addPartnerLogo" method="post">
    <div class="col-sm-4">
      <div class="input-block">
        <label for="">First Name</label>
        <input type="text" class="form-control" name="first_name">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="input-block">
        <label for="">Last Name</label>
        <input type="text" class="form-control" name="last_name">
      </div>
    </div>
    
  
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
<br/>
<br/>
<br/>
    <div class="col-sm-4">
      <div class="input-block">
        <label for="">Upload Image</label>

          <input type="file" id="fileinput" class="form-control" name ="file_name">
      <!--button class="square-button" style="margin-top: 30px; padding-bottom: 20px; padding-top: 20px;">Note: Partner Logo Image Size:</button-->
      </div>
    </div>

    <div class="col-sm-12">
      <button class="button" type="submit" style="margin-top: 30px; padding-right: 20px; padding-left: 20px;">Update</button>
    </div>
  </form>
</section>

<!-- follow me template -->

                   
                   

                   
                    </div>
                   
                    <!-- End Widgets -->

                </div>
                <!-- /wrapper-content -->
