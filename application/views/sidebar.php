 <div style class="page-content">
    	<div class="row">		  
            <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?php echo site_url();?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li class="submenu"><a href="#">
                            <i class="glyphicon glyphicon-calendar">
                                </i> Projects<span class="caret pull-right"></span></a>
                                <ul>
                             <li><a href="<?php echo site_url('auth/create_user');?>">Assign Projects</a></li>
                            <li><a href="<?php echo site_url('manage');?>">View Projects</a></li>
                        </ul>
                    </li>
                     <li><a href=""><i class="glyphicon glyphicon-pencil"></i> Timesheet</a></li>
                     <li><a href=""><i class="glyphicon glyphicon-pencil"></i> Manage leaves</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="fa fa-user"></i> Manage Employee
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                             <li><a href="<?php echo site_url('auth/create_user');?>">Add employee</a></li>
                            <li><a href="<?php echo site_url('auth/deactivate');?>">Delete employee</a></li>
                        </ul>
                    </li>
                </ul>
                     </div>
		  </div>