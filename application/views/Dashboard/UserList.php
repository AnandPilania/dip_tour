
<!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>Users</h2>
                        <ol class="breadcrumb">
                            <li> <a href="<?php echo base_url('Dashboard');?>">Dashboard</a> </li>
                            <li class="active"> <a href="#"><strong>User list</strong></a> </li>
                        </ol>
                    </div>
                </div>
         

              <h2>Registered User</h2>

<div class="container-fluid" >
    <?php $table_headers = array_keys(max($data)); ?>
  <div class="col-lg-12">
    <table id="visa" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <?php 
                foreach($table_headers as $k=>$headername){
                    if($k == 0){
                        echo '<th>Sr No.</th>';
                                          }
                    else{
                        echo '<th>'.trim(ucwords(str_replace('_',' ',$headername))).'</th>';
                    }
                }?>
              
            </tr>
        </thead>
        <tbody>
               <?php if (empty($data)) { ?>
                  <tr>
                      <td style="color: red;" colspan = "<?php echo count($table_headers); ?>">No Data present</td>
                  </tr>
              <?php } else { 
                  foreach ($data as $k => $v) {
                    ?>
                    <tr> 
                    <?php  foreach($table_headers as $headername){
                              echo '<td>'.$v[$headername].'</td>';
                      }
                     ?>
					 <td>
							<input data-group="<?php echo $val['id']; ?>" type="hidden" name="id" value="<?php echo $val['id']; ?>"/>
							<a href="<?php echo base_url();?>Dashboard/deleteUser?id=<?php echo $v['id']; ?>"/>
							   <i class="fa fa-trash-o"  aria-hidden="true"data-toggle="tooltip" data-placement="top" title="Delete" style="font-size:20px"></i>
							
							</a>
							<a href="<?php echo base_url();?>Dashboard/editUser?id=<?php echo $v['id']; ?>"/>
							   <i class="fa fa-pencil"  aria-hidden="true"data-toggle="tooltip" data-placement="top" title="edit" style="font-size:20px"></i>
							</a>
							</td>  
 <?php
 echo '</tr>';							
                      ?>                                        
                  <?php } ?>
                  </tr> 
              <?php } ?>            
        
        </tbody>
    </table>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    var table = $('#visa').DataTable( {       
        scrollX:        true,
        scrollCollapse: true,
        autoWidth:         true,  
         paging:         true,       
        columnDefs: [
        { "width": "150px", "targets": [0,1] },       
        { "width": "60px", "targets": [4] }
      ]
    } );
} );</script>
     