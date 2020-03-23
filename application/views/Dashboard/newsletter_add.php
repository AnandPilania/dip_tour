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
                       <h3> Newsletter
 
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
  <form id= "newsletter" class="contact-form" enctype="multipart/form-data" action="<?php echo base_url();?>Dashboard/newsletterInsert" method="post">
		<input type="hidden" name="id" value="<?php //echo $getData['id'] ?>" />
        <div class="box-body">
          
			<div class="row">
			
              <!-- /.form-group -->
              
            </div>
			<div class="col-md-4 col-12">
			
              <div class="form-group">
					<label>Subscriber List</label>
					<div class="">
					<?php
					$sub = $this->Newsletter->get();
					$rt =json_decode(json_encode($sub), true);
					
					?>
					 
					    <select name="subscriber" id="subscriber1"   method="post" class="form-control">
						  <?php
                         					   
							foreach($sub as $k=> $val){
								
							
								?>
								<option value="<?php echo " " . $val. " "?>"><?php echo " " . $val. " "; ?></option> 

						<?php 
							} 
							?>
                        </select>
							
						<div class="help-block">
						</div>
				    </div>
						</div>
				</div>
              <!-- /.form-group -->
              
            </div>
            <div class="col-md-4 col-12">
			
              <div class="form-group">
					<label>Newsletter Title</label>
					<div class="controls">
						<input type="text" name="newsletter_title" class="form-control" required="" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers" aria-invalid="false" value="<?php //echo $getData->newsletter_title;?>"> 
						<div class="help-block">
						</div>
						</div>
				</div>
              <!-- /.form-group -->
              
            </div>
			<div class="col-md-4 col-12"></div>
            <!-- /.col -->
            <div class="col-md-8 col-12" style="margin-top:10px;">
              <div class="form-group">
					<label>Newsletter Content</label>
					<div class="controls">
						<textarea  rows="4" cols="50" class="form-control"  name="newsletter_content" id="newsletter_content" class="form-control"placeholder="Enter Description" required>
						<?php //echo $result->newsletter_content;?></textarea> 
						<div class="help-block">
						</div>
						</div>
				</div>
              <!-- /.form-group -->
              
            </div>
            <!-- /.col -->
			
			
			 
            <!-- /.col -->
          </div>
          <!-- /.row -->
		 
         
		  <div class="row">
		  <div class="col-md-4 col-12">
       
            <!-- /.col -->
			
			
			 <div class="col-md-4 col-12">
              <div class="form-group">
					<button type="submit" class="btn btn-success"style="margin-top:28px">Send Mail</button>
				</div>
              <!-- /.form-group -->
              
            </div>
			
            <!-- /.col -->
          </div>
		  </form>
</section>

<!-- follow me template -->

                   
                   

                   
                    </div>
                   
                    <!-- End Widgets -->

                </div>
                <!-- /wrapper-content -->






	<!-- Lion_admin App -->
	<script src="<?php echo base_url().'public/';?>main/js/template.js"></script>
	
	<!-- Lion_admin for demo purposes -->
	<script src="<?php echo base_url().'public/';?>main/js/demo.js"></script>
	
	<!-- Lion_admin for advanced form element -->
	<script src="<?php echo base_url().'public/';?>main/js/pages/advanced-form-element.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
	$("#newsletter").validate({
		 	});
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url().'public/';?>plugins/select2-4.0.2/dist/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
		var roxyFileman = '<?php echo base_url() . 'assets/text_editor/fileman/index.html'; ?>';
        CKEDITOR.replace('newsletter_content', {filebrowserBrowseUrl: roxyFileman,
        filebrowserImageBrowseUrl: roxyFileman + '?type=image',
        removeDialogTabs: 'link:upload;image:upload'});

		var v = $("#p_form").validate({
			
		});

		
		
	});
	//$('#subscriber').select2();
	</script>

</body>
</html>
