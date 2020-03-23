<!-- Start page content wrapper -->
<link href="<?php echo base_url().'public/';?>css/css/style.css" rel="stylesheet">	
	 <link href="<?php echo base_url().'public/';?>css/css/jquery-ui.css" rel="stylesheet">	 
	 <link href="<?php echo base_url().'public/';?>css/css/bootstrap.min.css" rel="stylesheet">
	 <link href="<?php echo base_url(); ?>public/css/css/flight-style-inner.css" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/css/addons/datatables_actual.min.css">
        <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">
             
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>Hotels </h2>
                        <ol class="breadcrumb">
                            <li> <a href="index.html">Dashboard</a> </li>
                            <li class="active"><a href="<?php echo base_url('Dashboard');?>"> <strong>Hotels</strong> </a></li>
                        </ol>
                    </div>
                </div>
                <div class="wrapper-content ">
                    <div class="row">
                    <!-- Start Widgets -->

 
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



<!--</style><h2><?php echo $this->session->flashdata('item'); ?></h2> 
     <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="box">
            <!--<div class="box-header with-border">
              <h3 class="box-title">Hover Export Data Table</h3>
              <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
            </div>-->
          
        <div class="box-body">
				<div class="box-body">
					
				</div>
					 
					
				</div>
				<div class="table-responsive">
				  <table id="hotels" class="customers">
				  
					<thead class="no-sort">
					
						<tr>
							<th>SNO</th>
							<th>Destination</th>
							<th>Hotel</th>
							<th>Check In date</th>
							<th>Departure Date</th>
							<th>No of Rooms</th>
							<th>Adult count</th>
							<th>Child count </th>
							<th>Search Time</th>
							<th>Name</th>
							<th>Email</th>
							<th>phone</th>
							<th>Action</th>
							
						</tr>
					</thead>
					
					<tbody>
				<?php
							 
							 $i = 1;
                            foreach($data as $k=>$val)  {
								//print_r($news);die;
                             ?>
						<tr>
							<td>  <?php   echo $i; ?></td>
							<td> <?php echo $val['destination']; ?></td>
							
							<td> <?php echo $val['hotel_name']; ?></td>		
							<td> <?php echo $val['check_in_date']; ?></td>	
							<td> <?php echo $val['check_out_date']; ?></td>	
							<td> <?php echo $val['no_of_rooms']; ?></td>		
							<td> <?php echo $val['no_of_adults']; ?></td>		
							<td> <?php echo $val['no_of_children']; ?></td>		
								<td> <?php echo $val['time']; ?></td>		
									<td> <?php echo $val['full_name']; ?></td>		
									<td> <?php echo $val['email']; ?></td>	

										<td> <?php echo $val['phone']; ?></td>											
							<td>
							
							<input data-group="<?php echo $val['id']; ?>" type="hidden" name="id" value="<?php echo $val['id']; ?>"/>
							<a href="<?php echo base_url();?>Dashboard/deleteHotel?id=<?php echo $val['id']; ?>"/>
							   <i class="fa fa-trash-o"  aria-hidden="true"data-toggle="tooltip" data-placement="top" title="Delete" style="font-size:20px"></i>
							</a>
							</td>
						</tr>
						
						 <?php
                           $i++;
                                }
                         ?>
					</tbody>
				</table>
				</div>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
                  
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
	</section>



	<script>
	$(document).ready(function () {   
     $('#hotels').DataTable( {
 bSort: false, 
 } );           
 });
</script>	
  </div>
                   
 </div>
</body>
</html> 


