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

<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.countdown.css" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet"> 

	<!--<script src="<?php echo base_url(); ?>assets/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.countdown.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
<script src='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js'></script>
<!-- //fature jacascript/////// -->

    <link href="<?php echo base_url(); ?>assets/css/site.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url(); ?>assets/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>

<script>

$(document).ready(function(){

	  $(".demo1").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            
            onToDo: function () {
                //console.log(this);
            }
        });
	
	<?php 
   
	if($this->session->userdata('fv')=="457")
	{ ?>
	$('.abt1').css("height",<?php echo $this->session->userdata('fv'); ?>);
	<?php $this->session->unset_userdata('fv'); 
         }else{
	?>

var explore1 = $('.hm').css("height");
var explore2=  $('.hm1').css("height");
var explore3= parseInt(explore1)+parseInt(explore2);
//alert(explore3);
if(!isNaN(explore3))
{
    $('.abt1').css("height",explore3);
}
var explore = $('.abt').css("height");
   var exp=parseInt(explore);
   //alert(exp);
   if(!isNaN(exp))
   {
    var test= $('.abt1').css("height",exp);
   } 
var mq = $('.abt1').css("height");
mq=parseInt(mq)/4;
 if(!isNaN(exp)){
   $('.mq').attr("height",mq);
 }
 <?php } ?>
  $("div.bhoechie-tab-menu>div.list-group>a").click(function() {
  	
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
       // $("div.bhoechie-tab-menu>div.list-group>a:first-child").click();
       $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        
        
        });
        $("div.bhoechie-tab-menu>div.list-group>a").blur(function(){
        	$('div.bhoechie-tab div.bhoechie-tab-content').find('ul li').removeClass("active");
        	$('div.bhoechie-tab div.bhoechie-tab-content').find('ul li:eq(0)').addClass("active");
        	//$('div.bhoechie-tab div.bhoechie-tab-content div.tab-content div.tab-pane').removeClass("active");
        	$('div.bhoechie-tab div.bhoechie-tab-content div.tab-content').find('div.tab-pane').removeClass("active");
        	$('div.bhoechie-tab div.bhoechie-tab-content div.tab-content').find('div.tab-pane:eq(0)').addClass("active");

        });
              $('#main-slider .owl-carousel').owlCarousel(
    {
      items: 1,
      margin: 0,
      loop: true,
      nav: false,
      navText: ['Back','Next'],
      dots: false,
      dotsEach: true,
      autoplay: true,
      autoplaySpeed: 500,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
    }
  );
  $('#owl-1 .owl-carousel').owlCarousel(
    {
      items: 4,
      margin: 16,
      loop: true,
      stagePadding: 64,
      nav: true,
      // navText: ['Back','Next'],
      navText: ['',''],
      // navText: ["<img src='myprevimage.png'>","<img src='mynextimage.png'>"],
      dots: false,
      dotsEach: true,
      lazyLoad: false,
      autoplay: true,
      autoplaySpeed: 500,
      navSpeed: 500,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
    }
  );
  
  $('#owl-2 .owl-carousel').owlCarousel(
    {
      items: 5,
      margin: 16,
      stagePadding: 32,
      loop: true,
      autoplay: true,
      autoplaySpeed: 500,
      navSpeed: 500,
      dots: false,
      dotsEach: true,
      nav: true,
      // navText: ['Back','Next'],
      navText: ['',''],
      autoplayTimeout: 2000,
      autoplayHoverPause: false,
      animateOut: 'slideOutDown',
      animateIn: 'flipInX',
    }
  );

    });
    });

</script>
</head>
<body onload="myFunction()">
<?php
         if(isset($result))
          {
			foreach($result as $row){ ?>

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
			
            <li><a href="<?php echo base_url('Welcome/faculty_view'); ?>">Faculty</a></li>
           
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
<?php if($this->uri->slash_segment(2)=='/'){ ?>
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
		         
	</div>
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
  </div>
  </div>
<div class="bg col-md-12" style="background:url('<?php echo base_url('assets/images/bg.jpg'); ?>') no-repeat;">
     	
						<?php $query=$this->db->get('home'); 
foreach($query->result() as $row)
{ ?>
						<div class="page-title-home">
							<h2>Welcome To <?php echo $row->title;  }?></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</p>
						</div>
						</div>
						    <div class="grid_1">
     	<div class="container">
     		<div class="col-md-4">
                <div class="news">
                    <h1>News</h1>
                    <marquee onmouseout="this.start();" onmouseover="this.stop();" scrollamount="2" scrolldelay="0" behavior="scroll" direction="up">
                    <div class="section-content">
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>07-25-2015</figure>
                            <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                        </article>
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <a href="#">It is a long established fact that a reader will be distracted.</a>
                        </article>
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
                        </article>
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
                        </article>
                        
                    </div><!-- /.section-content -->
                    </marquee>
                    <a href="#" class="read-more">All News</a>
                </div><!-- /.news-small -->
            </div>
            <div class="col-md-8 grid_1_right">
              <h2>Programs</h2>
		      <div class="but_list">
		       <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Day 1&nbsp;&nbsp;&nbsp;31-08-2015</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Day 2&nbsp;&nbsp;&nbsp;01-09-2015</a></li>
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Day 3&nbsp;&nbsp;&nbsp;05-09-2015</a></li>
				</ul>
			<div id="myTabContent" class="tab-content">
			  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
			    <div class="events_box">
			    	<div class="event_left"><div class="event_left-item">
			    		<div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
			    		<div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
			    		<div class="icon_2">
			    		  <div class="speaker">
			    			  <i class="fa fa-user"></i>
			    			  <div class="speaker_item">
			    			     <a href="#">Lorem Ipsum</a>
			    			  </div>
			    			  <div class="clearfix"></div></div>
			    		  </div>
			    		</div>
			    	</div>
			    	<div class="event_right">
			    		  <h3><a href="#">Welcoming and introduction</a></h3>
						  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <a href="#">Read More</a></p>
						  <img src="images/t9.jpg" class="img-responsive" alt=""/>	
		    	    </div>
		    	    <div class="clearfix"></div>
			   </div>
			   <div class="events_box">
			    	<div class="event_left"><div class="event_left-item">
			    		<div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
			    		<div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
			    		<div class="icon_2">
			    		  <div class="speaker">
			    			  <i class="fa fa-user"></i>
			    			  <div class="speaker_item">
			    			     <a href="#">Lorem Ipsum</a>
			    			  </div>
			    			  <div class="clearfix"></div></div>
			    		  </div>
			    		</div>
			    	</div>
			    	<div class="event_right">
			    		  <h3><a href="#">Welcoming and introduction</a></h3>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form <a href="#">Read More</a></p>
						  <img src="images/t5.jpg" class="img-responsive" alt=""/>	
		    	    </div>
		    	    <div class="clearfix"></div>
			   </div>
			  </div>
			  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
			    <div class="events_box">
			    	<div class="event_left"><div class="event_left-item">
			    		<div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
			    		<div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
			    		<div class="icon_2">
			    		  <div class="speaker">
			    			  <i class="fa fa-user"></i>
			    			  <div class="speaker_item">
			    			     <a href="#">Lorem Ipsum</a>
			    			  </div>
			    			  <div class="clearfix"></div></div>
			    		  </div>
			    		</div>
			    	</div>
			    	<div class="event_right">
			    		  <h3><a href="#">Welcoming and introduction</a></h3>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form <a href="#">Read More</a></p>
						  <img src="images/t8.jpg" class="img-responsive" alt=""/>	
		    	    </div>
		    	    <div class="clearfix"></div>
			   </div>
			   <div class="events_box">
			    	<div class="event_left"><div class="event_left-item">
			    		<div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
			    		<div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
			    		<div class="icon_2">
			    		  <div class="speaker">
			    			  <i class="fa fa-user"></i>
			    			  <div class="speaker_item">
			    			     <a href="#">Lorem Ipsum</a>
			    			  </div>
			    			  <div class="clearfix"></div></div>
			    		  </div>
			    		</div>
			    	</div>
			    	<div class="event_right">
			    		  <h3><a href="#">Welcoming and introduction</a></h3>
						  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature <a href="#">Read More</a></p>
						  <img src="images/t2.jpg" class="img-responsive" alt=""/>	
		    	    </div>
		    	    <div class="clearfix"></div>
			   </div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
			    <div class="events_box">
			    	<div class="event_left"><div class="event_left-item">
			    		<div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
			    		<div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
			    		<div class="icon_2">
			    		  <div class="speaker">
			    			  <i class="fa fa-user"></i>
			    			  <div class="speaker_item">
			    			     <a href="#">Lorem Ipsum</a>
			    			  </div>
			    			  <div class="clearfix"></div></div>
			    		  </div>
			    		</div>
			    	</div>
			    	<div class="event_right">
			    		  <h3><a href="#">Welcoming and introduction</a></h3>
						  <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings <a href="#">Read More</a></p>
						  <img src="images/t7.jpg" class="img-responsive" alt=""/>	
		    	    </div>
		    	    <div class="clearfix"></div>
			   </div>
			   <div class="events_box">
			    	<div class="event_left"><div class="event_left-item">
			    		<div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
			    		<div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
			    		<div class="icon_2">
			    		  <div class="speaker">
			    			  <i class="fa fa-user"></i>
			    			  <div class="speaker_item">
			    			     <a href="#">Lorem Ipsum</a>
			    			  </div>
			    			  <div class="clearfix"></div></div>
			    		  </div>
			    		</div>
			    	</div>
			    	<div class="event_right">
			    		  <h3><a href="#">Welcoming and introduction</a></h3>
						  <p>Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur.... <a href="#">Read More</a></p>
						  <img src="images/t4.jpg" class="img-responsive" alt=""/>	
		    	    </div>
		    	    <div class="clearfix"></div>
			    </div>
			   </div>
		     </div>
		    </div>
		   </div>
        </div>
      <div class="clearfix"> </div>
     </div>
    </div>
						<?php
}

?>
				
 
	
		<?php 
		
		}
		
		} ?>	 


<!-- Admission/Alumni/Placements/Online Library/Training/Infrastructure -->
<!--

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
-->
