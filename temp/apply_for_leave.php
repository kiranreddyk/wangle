
<?php

$this->load->view('header');
$this->load->view('sidebar_emp');

?>

<section name="page">
<div class="col-lg-7">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title"><h2>Apply For a leave</h2></div>
					          
					            <div class="panel-options">
					              <a data-rel="collapse" href="#"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a data-rel="reload" href="#"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
                                                            
                                                            <form role="form" method="post" action="leave" class="form-horizontal">
                                                                    <div class="form-group">
											<label>Type of leave:</label>
                                                                                        <select name="type_of_leave" class="form-control">
                                                                                            <option class="form">Health Problem</option>
                                                                                            <option class="form">    Going Home Town</option>
                                                                                            <option class="form">   Rest</option>
                                                                                            <option class="form-horizontal">....</option>
                                                                                            
                                                                                            
                                                                                        </select>
										</div>
                                                                    <div class="form-group">
											<label>Leave Description:</label>
                                                                                        <textarea name="leave_desc" rows="3" placeholder="Leave Description" class="form-control"></textarea>
										</div>
                                                                    <div class="form-group">
											<label>from:</label>
                                                                                        
                                                                                        <div data-format="d-m-y" class="bfh-datepicker"><div data-toggle="bfh-datepicker" class="input-group bfh-datepicker-toggle"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input type="text" name="from" placeholder="dd/mm/yyy" class="form-control"></div><div class="bfh-datepicker-calendar"><table class="calendar table table-bordered"><thead><tr class="months-header"><th colspan="4" class="month"><a href="#" class="previous"><i class="glyphicon glyphicon-chevron-left"></i></a><span>July</span><a href="#" class="next"><i class="glyphicon glyphicon-chevron-right"></i></a></th><th colspan="3" class="year"><a href="#" class="previous"><i class="glyphicon glyphicon-chevron-left"></i></a><span>2014</span><a href="#" class="next"><i class="glyphicon glyphicon-chevron-right"></i></a></th></tr><tr class="days-header"><th>SUN</th><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th></tr></thead><tbody><tr><td class="off">29</td><td class="off">30</td><td data-day="1">1</td><td data-day="2">2</td><td data-day="3">3</td><td data-day="4">4</td><td data-day="5">5</td></tr><tr><td data-day="6">6</td><td data-day="7">7</td><td data-day="8">8</td><td data-day="9">9</td><td data-day="10">10</td><td data-day="11">11</td><td data-day="12">12</td></tr><tr><td data-day="13">13</td><td class="today" data-day="14">14</td><td data-day="15">15</td><td data-day="16">16</td><td data-day="17">17</td><td data-day="18">18</td><td data-day="19">19</td></tr><tr><td data-day="20">20</td><td data-day="21">21</td><td data-day="22">22</td><td data-day="23">23</td><td data-day="24">24</td><td data-day="25">25</td><td data-day="26">26</td></tr><tr><td data-day="27">27</td><td data-day="28">28</td><td data-day="29">29</td><td data-day="30">30</td><td data-day="31">31</td><td class="off">1</td><td class="off">2</td></tr></tbody></table></div></div>
                                                                                        
                                                                                        <label>To:</label>
                                                                                        
                                                                                        <div data-format="d-m-y" class="bfh-datepicker"><div data-toggle="bfh-datepicker" class="input-group bfh-datepicker-toggle"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input type="text" name="to" placeholder="dd/mm/yyy" class="form-control"></div><div class="bfh-datepicker-calendar"><table class="calendar table table-bordered"><thead><tr class="months-header"><th colspan="4" class="month"><a href="#" class="previous"><i class="glyphicon glyphicon-chevron-left"></i></a><span>July</span><a href="#" class="next"><i class="glyphicon glyphicon-chevron-right"></i></a></th><th colspan="3" class="year"><a href="#" class="previous"><i class="glyphicon glyphicon-chevron-left"></i></a><span>2014</span><a href="#" class="next"><i class="glyphicon glyphicon-chevron-right"></i></a></th></tr><tr class="days-header"><th>SUN</th><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th></tr></thead><tbody><tr><td class="off">29</td><td class="off">30</td><td data-day="1">1</td><td data-day="2">2</td><td data-day="3">3</td><td data-day="4">4</td><td data-day="5">5</td></tr><tr><td data-day="6">6</td><td data-day="7">7</td><td data-day="8">8</td><td data-day="9">9</td><td data-day="10">10</td><td data-day="11">11</td><td data-day="12">12</td></tr><tr><td data-day="13">13</td><td class="today" data-day="14">14</td><td data-day="15">15</td><td data-day="16">16</td><td data-day="17">17</td><td data-day="18">18</td><td data-day="19">19</td></tr><tr><td data-day="20">20</td><td data-day="21">21</td><td data-day="22">22</td><td data-day="23">23</td><td data-day="24">24</td><td data-day="25">25</td><td data-day="26">26</td></tr><tr><td data-day="27">27</td><td data-day="28">28</td><td data-day="29">29</td><td data-day="30">30</td><td data-day="31">31</td><td class="off">1</td><td class="off">2</td></tr></tbody></table></div></div>
                                                                                        <label>Feedback:</label>
                                                                                        <input type="text" name="feedback" placeholder="Fedback" class="form-control">
										</div>
                                                                <input type="submit" class="btn btn-primary" name="timesheet" value="Submit">
                                                                    
                                                                    
								</form>
			  				</div>
			  			</div>
	  				</div>
</section>

<?php $this->load->view('footer');?>