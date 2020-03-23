       
<style>
		
		@media screen and (max-width: 990px) and (min-width: 320px) {
						.roomdiv{
							padding-top:15px !important;
						}
						.marlft {
							margin-left:0rem !important;
						}
						#search_hotel  {
							width:100% !important;
						}
					}
		
		</style>


	   <section>

            <div class="card border-0">
                <div class="container" style="margin-top: 20px; border:5px solid green;">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body bg-white pad-card border-0">
                                <h3 class="font-sm-two">Search Hotels</h3>
                                <hr>
                                <h2><?php echo $this->session->flashdata('item'); ?></h2> 
                                <form action="<?php echo base_url()?>Hotels/add" method="post">
                                <!--div class="checkboxes">
                                <label class="pl-4">CATEGORY</label>
                               <label for="x"><input class="check" type="checkbox" id="x" name="category_1"/> <span>2</span></label>
                              <label for="y"><input class="check" type="checkbox" id="y" name="category_2"/> <span>3</span></label>
                               <label for="z"><input class="check" type="checkbox" id="z" name="category_3"/> <span>4</span></label>
                               <label for="y"><input class="check" type="checkbox" id="y" name="category_4"/> <span>5</span></label>
                               <label for="z"><input  class="all" type="checkbox" id="z" name="category_5"/> <span>All</span></label>
                               
                               </div-->
                                <div class="tab_content mt-4">

                                    <div class="tabs_item">
                                        <div class="form-row">
                                            <div  class="col-lg-12">
                                                <div class="row">
                                            <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                               
                                                <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" placeholder="Select Destination" name="destination"
                                                       required >
                                            </div>
                                            
                                            <span  class="ordiv" >
                                            OR
                                            </span>
                                            
                                            
                                            <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                               
                                                <input type="text" class="form-control font-sm-four" id="validationCustom01" placeholder="Enter Hotel Name" name="hotel_name"
                                                       >
                                            </div>
                                     </div></div>
                                     <div  class="col-lg-12">
                                                <div class="row">
                                            <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                                <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">CHECK IN DATE</label>


                                                 <div class="input-group date" >
                                            
                                             <input type="text" id="datepick" class="form-control font-sm-four profile-date" value="SUNDAY 22 SEP'2019"  ng-required="true" placeholder="mm/dd/yyyy" name="check_in_date" required>
                                                     <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>

                                            </div>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                             <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                                <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold; margin-left: 20px;" >CHECK OUT DATE</label>


                                                 <div class="input-group date" >
                                             <input type="text" id="datepick1" class="form-control font-sm-four profile-date" value="SUNDAY 22 SEP'2019"  ng-required="true" placeholder="mm/dd/yyyy"  name="check_out_date" required>
                                                            <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>

                                            </div>

                                          </div>
                                      </div>
                                             <div  class="col-lg-12">
                                                <div class="row">
                                            <div class="col-md-5 col-12 padding-row-card font-sm-three" >
                                                <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">ROOMS</label>

                                                <input type="number" class="form-control font-sm-four" id="select_room" placeholder="No of rooms" name="no_of_rooms"
                                                       required>
                                                       </div>
                                        </div>
                                    </div>
                                        <div class="col-12 user-details pl-0 pr-0">
                                        <div id="divRoom1" class="form-row user_data">
                                          <div class="col-md-2  col-12 roomdiv" style="margin-left:10px;">
                                            NUMBER OF GUESTS
                                            </div>
                                          
                                            <div class="col-md-1 col-6 padding-row-card font-sm-three ">
                                                <label class="label-form-card" for="validationCustom01">Adults(>11 Yrs)</label>
                                                <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->


                                                <div class="quantity">
                                                    
                                                     <input id="room1AdultMinus" class="quantity__minus adult_minus" type="button" value="-" style="color:#ffffff;">
                                                    <input  type="number" class="form-control quantity__input adult_input" value="2" data-val="true" data-val-number="The field NoOfAdults must be a number." data-val-required="The NoOfAdults field is required." id="room1Adult" name="no_of_adults" required>
                                                    
                                                    <input id="room1AdultPlus" class="quantity__plus adult_plus" type="button" value="+" style="color:#ffffff;">
                                                </div>



                                            </div>
                                            <div class="col-md-1  col-6 padding-row-card font-sm-three ml-4 marlft" style="white-space:nowrap">
                                                <label class="label-form-card" for="validationCustom01">Children(2-11 Yrs)</label>
                                                <div class="quantity">
                                                    <input id="room1ChildMinus" class="quantity__minus children_minus" type="button" value="-" style="color:#ffffff;">
                                                    <input  type="number" class="form-control quantity__input children_input" data-val="true" data-val-number="The field NoOfChildren must be a number." data-val-required="The NoOfChildren field is required." id="room1Child" name="no_of_children" type="text" value="0">
                                                   <input id="room1ChildPlus" class="quantity__plus children_plus" type="button" value="+" style="color:#ffffff;">
                                                </div>
                                            </div>
                                           

                                        </div>
                                        </div>
                                    </div> <!-- / tabs_item -->

                                </div> <!-- / tab_content -->
                            </div> <!-- / tab -->



                            <hr>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                    <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">Full Name</label>
                                    <input type="text" class="form-control font-sm-four" id="full_name" placeholder="Full Name" name="full_name" required>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                    <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">Email</label>
                                    <input type="email" class="form-control font-sm-four" id="email" placeholder="Email" name="email" required minlength='10'>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                    <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">Phone</label>
                                    <input type="number" class="form-control font-sm-four" id="phone" placeholder="Phone" name="phone" required min='1111111111'>
                                </div>
                            </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-lg-12 col-12"><a href="hotellist.html"></a>
                                    <button class="btn float-right" id="search_hotel" style="background-color: #28a745; color: #ffffff; width: 340px; font-size: 15px;"><b>SEARCH HOTEL</b></button>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <br><br><br>
            <!-- SCRIPTS -->
            <script>
                var availableTags = <?php echo json_encode($airport); ?>;
                //console.log(availableTags);
                $( ".inputautocomplete" ).autocomplete({
                        source: availableTags
                    }); 
                $(function () {
                    $("#datepick").datepicker();
                    $("#datepick1").datepicker();
                    $("#datepick2").datepicker();
                });
            </script>
        </section>
