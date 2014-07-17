<?php

$this->load->view('header');
$this->load->view('sidebar_emp');

?>


<?php echo $message; ?>

<div class="col-md-10">
    
    <div style="background:#1111;" class="well">
	
	<div class="page-header">
	  <h1>My Leave List</h1>
	</div>

          <fieldset>

                    
              <form name="notice" action="leave">
 <select onchange="show_all();" id="stat" name="">
<option selected="selected" value="0">Select Status</option>
<option value="Approved">Approved</option>
<option value="Pending">Pending</option>
<option value="Rejected">Rejected</option>
<option value="Cancelled">Cancelled</option>
 </select></form> </fieldset>
        
          <div class="hr"></div>
          <div class="userleave_list" id="usertable">
          <table class="table table-bordered table-striped table-highlight" id="updates">
            <tbody><tr>
              <th style="width:35px;">S.No.</th>
              <th style="width:150px;">Leave Type</th>
              <th style="width:95px;">Date From</th>
              <th class="hidden-tablet hidden-phone" style="width:95px;">Date To</th>
              <th class="hidden-tablet hidden-phone" style="width:250px;">Reason</th>
              <th class="hidden-tablet hidden-phone" style="width:100px;">No. Of Days</th>
              <th style="width:126px;">Status</th>
            </tr>
            <?php
            foreach ($leave as $key => $value) {
                
            ?>
            <tr id="35" class="PendingClass">
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['type_of_leave']; ?></td>
                <td><?php echo $value['leave_desc']; ?></td>
                <td><?php echo $value['date_from']; ?></td>
                <td><?php echo $value['date_to']; ?></td>
                <td><?php echo $value['feedback']; ?></td>
                <td><?php echo $value['status']; ?></td>
            </tr>
            <?php } ?>            
              <tr id="moreid">	<td align="right" style="background:#fff; padding:3px 0px 3px 2px; vertical-align:top;" colspan="9" class="paging">
						
<div class="morebox">
<input type="hidden" id="offset" value="5">
<input type="hidden" id="limit" value="10">
<input type="hidden" id="row" value="31">
<a onclick="more();" id="5" class="btn btn-primary" href="#">More</a>
</div>
                    </td>
                </tr> 
            
                  </tbody></table>
		 
</div>
          </div>
        </div>
<script type="text/javascript">

 $(document).ready(function(){
   myfunc();
 });

function myfunc () {
var frm = document.getElementById("notice");
frm.submit();
}
function show_all(){
     $(document).ready(function(){
   myfunc();
 });

}    
    
</script>
    

<?php
$this->load->view('footer');
?>