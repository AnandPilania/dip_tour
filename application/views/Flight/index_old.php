        <style>
		
		@media screen and (max-width: 990px) and (min-width: 320px) {
						.searchbtnflight {
							width:100% !important;
						}
						.tabs li {
							font-size:12px !important;
						}
					}
		
		</style>
		
		
		
		<section>

            <div class="card border-0">
                <div class="container" style="margin-top: 20px; border:5px solid green;">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body bg-white pad-card border-0">
                                <h3 class="font-sm-two">Search For Flights</h3>

                                <hr>
                                <h2><?php echo $this->session->flashdata('item'); ?></h2> 
                                <form action="<?php echo base_url('/flight/add'); ?>" method="post">
                                    <div class="tab">
                                        <ul class="tabs nav-flex-icons" style="padding: 0px">
                                            <li><a href="javascript:void(0)" onclick="setTrip('One-Way');">One-Way</a></li>
                                            <li><a href="javascript:void(0)" onclick="setTrip('Round-Trip');">Round-Trip</a></li>
                                            <!-- li><a href="javascript:void(0)" onclick="setTrip('Multi-City');">Multi-City</a></li-->
                                        </ul>
                                        <div style="display:none">
                                            <input type="hidden" name="flight_search_type" id="trip_type" value="One-Way">
                                        </div>
                                         <!-- / tabs -->
                                        <div class="tab_content">
                                            <div class="tabs_item">
                                                <div class="form-row">
                                                    <div class="col-md-6 padding-row-card  font-sm-three">
                                                        <label class="label-form-card" for="">FROM</label>
                                                        <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" name="origin" placeholder="Enter Departure City" required >
                                                    </div>
                                                    <div class="col-md-6 padding-row-card  font-sm-three">
                                                        <label class="label-form-card" for="">TO</label>
                                                        <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" name="destination" placeholder="Enter Destination City" required >
                                                    </div>
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">DEPART DATE</label>
                                                        <div class="input-group date" >
                                                            <input type="text" id="datepick1" class="form-control font-sm-four profile-date" value="<?php echo date('m/d/Y');?>" ng-required="true" placeholder="mm/dd/yyyy" name="departure_date" required>
                                                            <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-2 col-4 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Adults(11 Yrs)</label>
                                                        <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus adult_minus"><span>-</span></a>
                                                            <input name="adult_count" type="number" class="form-control quantity__input adult_input" value="1" required>
                                                            <a href="#" class="quantity__plus adult_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-4 padding-row-card font-sm-three" style="white-space:nowrap">
                                                        <label class="label-form-card" for="validationCustom01">Children(2-11 Yrs)</label>
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus children_minus"><span>-</span></a>
                                                            <input name="child_count" type="number" class="form-control quantity__input children_input" value="0">
                                                            <a href="#" class="quantity__plus children_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-4 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Infant(-2yrs)</label>
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus infant_minus"><span>-</span></a>
                                                            <input name="infant_count" type="text" class="form-control quantity__input infant_input" value="0">
                                                            <a href="#" class="quantity__plus infant_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Class</label>
                                                        <select class="form-control form-control-sm" name="class" required>
                                                            <option>Economy</option>
                                                            <option>First Class</option>
                                                            <option>Business Class</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01"><br></label>
                                                        <select class="form-control form-control-sm" name="airline" required>
                                                            <option>Select Airline</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- / tabs_item -->
                                            <div class="tabs_item">
                                                <div class="form-row">
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">FROM</label>
                                                        <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" placeholder="Enter Departure City" name="origin_1" >                                                             
                                                    </div>
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three ">
                                                        <label class="label-form-card" for="validationCustom01">TO</label>
                                                        <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" placeholder="Enter Destination City" name="destination_1" >                                                
                                                    </div>
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">DEPART DATE</label>
                                                        <div class="input-group date" >
                                                            <input type="text" id="datepick" class="form-control font-sm-four profile-date" value="SUNDAY 22 SEP'2019"  ng-required="true" placeholder="mm/dd/yyyy" name="departure_date_1" >
                                                            <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">RETURN DATE</label>
                                                        <div class="input-group date" >
                                                            <input type="text" id="datepick2" class="form-control font-sm-four profile-date" ng-required="true" placeholder="mm/dd/yyyy" value="<?php echo date('m/d/Y');?>" name="return_date_1">
                                                            <div class="input-group-addon" >
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Adults(11 Yrs)</label>
                                                        <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus adult_minus"><span>-</span></a>
                                                            <input name="adult_count_1" type="number" class="quantity__input adult_input" value="1" >
                                                            <a href="#" class="quantity__plus adult_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Children(2-11 Yrs)</label>
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus children_minus"><span>-</span></a>
                                                            <input name="child_count_1" type="number" class="quantity__input children_input" value="0">
                                                            <a href="#" class="quantity__plus children_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Infant(-2yrs)</label>
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus infant_minus"><span>-</span></a>
                                                            <input name="infant_count_1" type="number" class="quantity__input infant_input" value="0">
                                                            <a href="#" class="quantity__plus infant_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Class</label>
                                                        <select class="form-control form-control-sm" name="class_1" >
                                                            <option>Economy</option>
                                                            <option>First Class</option>
                                                            <option>Business Class</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01"><br></label>
                                                        <select class="form-control form-control-sm" name="airline_1" >
                                                            <option>Select Airline</option>
                                                            <option value="indian airlines">Indian Arilines</option>
                                                            <option value="jet airways">Jet Airways</option>
                                                            <option value="emarites">Emarites</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- / tabs_item -->
                                            <!--div class="tabs_item">
                                                <h4>Tab03</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
                                            </div> / tabs_item -->
                                        </div> <!-- / tab_content -->
                                    </div> <!-- / tab -->
                                    <br/>
                                    <hr>
                                    <br/>
                           
                                <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                    <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">Full Name</label>
                                    <input type="text" class="form-control font-sm-four" id="full_name" placeholder="Full Name" name="full_name" required>
                                </div>
                                <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                    <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">Email</label>
                                    <input type="email" class="form-control font-sm-four" id="email" placeholder="Email" name="email" required minlength="10">
                                </div>
                                <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                    <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">Phone</label>
                                    <input type="number" class="form-control font-sm-four" id="phone" placeholder="Phone" name="phone" required min='1111111111'>
                                </div>
                            
                            <br/>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="non_stop_only" value="">&nbsp;Show Direct Flights Only</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="search_time" value="">&nbsp;My dates are flexible(+/- 3 days)</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button  class="btn btn-primary float-right searchbtnflight" type="submit">SEARCH FLIGHT</button>
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
                 $(document).ready(function(){
                   
                   
                    
                });

                function setTrip(type){        
                        $("#trip_type").val(type);
                }

            </script>
        </section>










        <section>

            <div class="container newsletter-bg-colour" style="margin-top:0px;
                 background-color: #ffffff; border-style: solid; padding-bottom: 20px;padding-top: 20px;">
                <form>
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
                    </div>
                </form>
            </div>
        </section>
