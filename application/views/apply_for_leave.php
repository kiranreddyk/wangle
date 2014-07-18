
<?php

$this->load->view('header');
$this->load->view('sidebar_emp');

?>

<div class="col-md-6">
<div style="background:#fff;" class="span9 well">
	
	
	  <h1>Apply For Leave <small></small></h1>

     <form class="form-actions" accept-charset="utf-8" method="post" action="leave">	<div class="control-group">
		<label class="control-label">Leave Type</label>
		<div class="controls">
		  <select name="leave_type">
<option value="Select Leave Type">Select Leave Type</option>
<option value="Annual">Annual</option>
<option value="Medical">Medical</option>
<option value="Maternity">Maternity</option>
<option value="Paternity">Paternity</option>
<option value="Off In Lieu">Off In Lieu</option>
<option value="Leave Without Pay">Leave Without Pay</option>
<option value="Optional Leave">Optional Leave</option>
<option value="Compassionate">Compassionate</option>
<option value="Relocation">Relocation</option>
<option value="Vacation">Vacation</option>
</select>            		</div>
	</div>
	<div class="form-group">
		<label class="control-label">Date From</label>
		<div class="controls">
                    <input type="text" onchange="getNumberOfDays();" value="" style="width: 20%;" name="date_from" id="dateTo" class="datepicker hasdatepicker form-control">		</div>
        </div><br>
    <div class="control-group">
		<label class="control-label">Date To</label>
		<div class="controls">
                    
		  <input type="text" onchange="getNumberOfDays();" value="" style="width: 20%;" name="date_to" id="dateFrom" class="datepicker hasdatepicker form-control">		</div>
	</div>
    <div style="display: none;" class="control-group" id="halfday">
		<label class="control-label"></label>
		<div class="controls">
        <label class="radio inline"><input type="radio" checked="checked" class="input-small changeNo" name="halfday" value="Full day">Full day</label>
        	<label class="radio inline"><input type="radio" class="input-small changeNo" name="halfday" value="First half">First half</label>
            <label class="radio inline"><input type="radio" class="input-small changeNo" name="halfday" value="Second half">Second half</label>
            
		   		</div>
	</div><br>
	
    <div class="control-group">
		<label class="control-label">Reason</label>
		<div class="controls">
                    <textarea style="width:60%;" name="reason" class="form-control"></textarea>
					</div>
	</div>
        <div class="control-group">
		<label class="control-label">feedback</label>
		<div class="controls">
                    <input type=text" style="width:40%;" name="feedback" class="form-control">
                </div>
	</div>
   <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-primary" value="submit" name="submit">
    </div>
  </div>
</form>
</div>
  </div>
<?php $this->load->view('footer');?>