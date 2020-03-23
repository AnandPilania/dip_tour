
<!-- Start page content wrapper -->
        <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>Hotel</h2>
                        <ol class="breadcrumb">
                            <li> <a href="<?php echo base_url('Dashboard');?>">Dashboard</a> </li>
                            <li class="active"> <a href="#"><strong>Hotel</strong></a> </li>
                        </ol>
                    </div>
                </div>
         

              <h2>Hotel Queries</h2>

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
                      echo '</tr>';
                      ?>                                        
                  <?php } ?>
                  </tr> 
              <?php } ?>            
                  
        </tbody>
    </table>
  </div>
</div>


<script type="text/javascript">$(document).ready(function() {
    var table = $('#visa').DataTable( {       
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
