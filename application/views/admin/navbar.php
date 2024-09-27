    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('admin'); ?>">Abc School</a>
            </div>
        
             
            <!-- /.navbar-header -->
        
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="javascript:" class="user" data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('admin/logout'); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <!--modal -->
   <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/home_view_insert'); ?>"><i class="fas fa-home"></i>&nbsp; Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Admin/about_view_insert'); ?>"><i class="fas fa-info"></i>&nbsp; About</a>  
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/faculty_view_insert'); ?>"><i class="fas fa-chalkboard-teacher"></i>&nbsp; Faculty</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fas fa-briefcase"></i>&nbsp; Services</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-chrome"></i>&nbsp; Features</a>                          
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>&nbsp; Career</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-phone-volume"></i>&nbsp; Contacts</a>                            
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard
                       <div class="analog-clock" style="float:right;">
            <svg width="70" height="70" style="margin-top:-35%;">
                <circle id="clock-face" cx="35" cy="35" r="30"  />
               <line id="h-hand" x1="35" y1="35" x2="35" y2="20" />
                <line id="m-hand" x1="35" y1="35" x2="35" y2="10" />
                <line id="s-hand" x1="35" y1="35" x2="35" y2="6" />
                <line id="s-tail" x1="35" y1="35" x2="35" y2="28" />
                <text x="27" y="15">12</text>
                <text x="58" y="39">3</text>
                <text x="32" y="63">6</text>
                <text x="7" y="39">9</text>
            </svg>
           <div class="time-text" style="display:none;">
                <span id="hr">00</span>
                <span>:</span>
                <span id="min">00</span>
                <span>:</span>
                <span id="sec">00</span>
                 <span id="suffix">--</span>
            </div>
            </div>
                    </h1>
                    
                </div>

        
                <!-- /.col-lg-12 -->
            </div>
        