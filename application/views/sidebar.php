 <div class="page-content">
    	<div class="row">		  
            <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?php echo site_url();?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="fa fa-clock-o"></i> Timesheet
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                             <li><a href="<?php echo site_url('');?>">Enter Todays Timesheet</a></li>
                            <li><a href="signup.html">edit previous time sheet</a></li>
                        </ul>
                    </li>
                   
                    
                    <li class="submenu">
                         <a href="#">
                            <i class="fa fa-umbrella"></i> Apply for leave
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                             <li><a href="<?php echo site_url('employee/apply_leave');?>">Apply</a></li>
                            <li><a href="">view status</a></li>
                        </ul>
                    </li>
                </ul>
                     </div>
		  </div>