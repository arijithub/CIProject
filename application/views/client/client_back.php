<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Learn an Education Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.countdown.css" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet"> 
</head>
<body>
	<?php foreach($result as $row){ ?>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo $row->title; ?></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        <li class="dropdown">
		            <a href="login.html"><i class="fa fa-user"></i><span>Login</span></a>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i><span>Courses</span></a>
		        	  <ul class="dropdown-menu">
			            <li><a href="courses.html">Courses Categories</a></li>
			            <li><a href="courses.html">Courses list</a></li>
			     
		              </ul>
		        </li>
		         <li class="dropdown">
		            <a href="register.html"><i class="fa fa-user"></i><span>Registration</span></a>
		        </li>
		       
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>Search</span></a>
		            <ul class="dropdown-menu search-form">
			           <form>        
                            <input type="text" class="search-text" name="s" placeholder="Search...">    
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                       </form>
			        </ul>
		        </li>
		    </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
			
    		<li><a href="<?php echo base_url('Welcome/about_view'); ?>">About</a></li>
			
            <li><a href="<?php echo base_url(); ?>">Faculty</a></li>
           
			<li><a href="services4.html">Services</a></li>
            
			<li><a href="features5.html">Features</a></li>

			<li><a href="career6.html">Career</a></li>

			<li><a href="faculty3.html">Department</a></li>
           
			<li><a href="services4.html">Feedback</a></li>
          
			<li class="last"><a href="contact7.html">Contacts</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>
<!-- banner -->
	<div class="banner">
			<!-- banner Slider starts Here -->
					<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-bg" style="background:url('<?php echo base_url(); ?>uploads/images/<?php echo $row->picture; ?>') no-repeat center top;">
									<div class="container">
										<div class="banner-info">
											<h3><?php echo $row->title; ?></h3>
											<p><?php echo $row->address; ?></p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2" style="background:url('<?php echo base_url(); ?>uploads/images/<?php echo $row->picture2; ?>') no-repeat center top;">
									<div class="container">
										<div class="banner-info">
											<h3><?php echo $row->title; ?></h3>
											<p><?php echo $row->address; ?></p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img" style="background:url('<?php echo base_url(); ?>uploads/images/<?php echo $row->picture1; ?>') no-repeat center top;width:100%;">
									<div class="container">
										<div class="banner-info">
											<h3><?php echo $row->title; ?></h3>
											<p><?php echo $row->address; ?></p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg" style="background:url('<?php echo base_url(); ?>uploads/images/<?php echo $row->picture; ?>') no-repeat center top;width:100%;">
									<div class="container">
										<div class="banner-info">
											<h3><?php echo $row->title; ?></h3>
											<p><?php echo $row->address; ?></p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2" style="background:url('<?php echo base_url(); ?>uploads/images/<?php echo $row->picture2; ?>') no-repeat center top;width:100%;">
									<div class="container">
										<div class="banner-info">
											<h3><?php echo $row->title; ?></h3>
											<p><?php echo $row->address; ?></p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class="banner-bg banner-img2" style="background:url('<?php echo base_url(); ?>uploads/images/<?php echo $row->picture3; ?>') no-repeat center top;width:100%;">
									<div class="container">
										<div class="banner-info">
											<h3><?php echo $row->title; ?></h3>
											<p><?php echo $row->address; ?></p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2" style="background:url('<?php echo base_url(); ?>uploads/images/<?php echo $row->picture4; ?>') no-repeat center top;width:100%;">
									<div class="container">
										<div class="banner-info">
											<h3><?php echo $row->title; ?></h3>
											<p><?php echo $row->address; ?></p>
											<a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>



							
						</ul>
		          </div>
		          <?php } ?>
	</div>
	
			 


<!-- Admission/Alumni/Placements/Online Library/Training/Infrastructure -->


		<div class="details">
<div class="container">
<div class="col-sm-2 submit_button">
<a onClick="pageLoad($(Admission).val());" href="#">
<input type="submit" id="Admission" value="Admission">
</a>
</div>
<div class="col-sm-2 submit_button">
<a onClick="pageLoad($(Alumni).val());" href="#">
<input type="submit" id="Alumni" value="Alumni">
</a>
</div>
<div class="col-sm-2 submit_button">
<a onClick="pageLoad($(Placements).val());" href="#">
<input type="submit" id="Placements" value="Placements">
</a>
</div>
<div class="col-sm-2 submit_button">
<a href="http://www.accskol.in" target="_blank">
<input type="submit" value="Online Library">
</a>
</div>
<div class="col-sm-2 submit_button">
<a onClick="pageLoad($(Training).val());" href="">
<input type="submit" id="Training" value="Training">
</a>
</div>
<div class="col-sm-2 submit_button">
<a onClick="pageLoad('facilities');" href="">
<input type="submit" id="Infrastructure" value="Infrastructure">
</a>
</div>





<!-- middle body target here-->
<div class="clearfix"> </div>
</div>
</div>
<div class="grid_1">
<div class="container">
<div class="col-md-2">
<div><img src="http://www.asutoshcollege.in/images/A_grade.jpg" alt="New" width="180" height="160"></div>
<div><table><tr><td align="justify"><font size="+1" color="#990000">DMD HS SCHOOL,a pioneer institute of education in West Bengal,was the first School in the state which was accredited by NAAC,in 2002.<br />
Today we are proud to announce that the School has been accredited by NAAC in the 'B' Grade and awarded a CGPA score of 2.57.
</font></td></tr></table></div>
<br />

<div class="col-md-10 grid_1_right" id="pagesDiv">
</div>
<div class="clearfix"> </div>
</div>
</div>



		  
<!-- before footer rules -->

<div class="col-md-10 grid_1_right" id="pagesDiv">
</div>
<div class="clearfix"> </div>
</div>
</div>
<div style="background: grey; text-align: center;">
<div class="container" style="color:white;">
<h4>Rules & Regulation</h4>
<table id="example" class="table table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th><b>Attendance</b></th>
<th><b>Mobile Phone</b></th>
<th><b>Anti Ragging</b></th>
</tr>
</thead>
<tbody>
<tr>
<td>Students falling short of 75% attendance shall not be allowed for the School examinations at the end of the year or session.</td>
<td>Mobile Phone, is strictly prohibited in classrooms, library, laboratory, corridors, stairs etc. Please ensure you have your mobile phone switched off when attending any session.</td>
<td>Any Student found involved in ragging either in the college premise or in the hostel will face immediate expulsion from the School as per order of Supreme Court.</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="clearfix"> </div>



	<!-- footer list -->
     <div class="footer">
    	<div class="container">
    		<div class="col-md-4 grid_4">
    		   <h3>About Us</h3>	
    		   <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.."</p>
    		      <ul class="social-nav icons_2 clearfix">
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                 </ul>
    		</div>
    		    		 <div class="col-md-4 grid_4">
    		   <h3>Contact Us</h3>
    			<address>
    			<strong>D.M.D.H.S SCHOOL </strong>
    			<br>
                    <span>NAMKHANA, SOUTH 24 PARAGANAS <br> WEST BENGAL-743357</span>
                    <br>
                    <abbr>Telephone : </abbr> 3021-7590-2263
                    <br>
                    <abbr>Email : </abbr> <a href="mailto@example.com">dmdhs@gmail.com<br>ddmg@yahoo.in</a>
               </address>
    		</div>
    		<div class="col-md-4 grid_4">
    		   <h3>Working Hours</h3>
    			 <table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">monday</td>
							<td class="day_value">11:00am - 4.30 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">tuesday</td>
							<td class="day_value">11:00am - 4.30 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">wednesday</td>
							<td class="day_value">11:00am - 4.30 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">thursday</td>
							<td class="day_value">11:00am - 4.30 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">friday</td>
							<td class="day_value">11:00am - 4.30 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">saturday</td>
							<td class="day_value">11:00am - 1.30 pm</td>
						</tr>
					    <tr class="closed">
							<td class="day_label">sunday</td>
							<td class="day_value closed"><span>Closed</span></td>
						</tr>
				    </tbody>
				</table>
            </div>
    		
    </div>
<script src="<?php echo base_url(); ?>assets/js/jquery.countdown.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</body>
</html>	