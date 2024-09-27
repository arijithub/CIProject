<!--
<div class="abt grid_4 col-md-8" style="background:#fff;">
	<?php
foreach($result1 as $row)
{ ?>

	<h3 style="padding-top:1%"><?php echo $row->title; ?></h3>
	<hr width="10%" style="border-top: 1px solid #ff1a1a; background: transparent;">
	<p style="text-align:left;color:#000000;"><?php echo $row->address; ?></p>
	<?php
}

?>
</div>
-->
<?php
foreach($result1 as $row)
{ ?>
<div class="services">
		<div class="container">
			<div class="w3layouts_header">
			<?php 
				$array = explode(" ", $row->title); 
				$lastWord = array_pop($array);
                $fWord=array_pop($array);
				?>
				<h2><?php echo $fWord ?><?php echo " "; ?><span><?php echo $lastWord; ?><span></h2>
				<p><span><i class="fa fa-info-circle" aria-hidden="true"></i></span></p>
			</div>
			<div class="w3layouts_skills_grids">
				<div class="col-md-6 agileinfo_about_left">
					<p><?php echo $row->address; ?></p>
				</div>
				<div class="col-md-6 agileinfo_about_right">
					<img src="<?php echo base_url(); ?>assets/images/1.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		<?php
}

?>
    <div style="background-image: url(<?php echo base_url(); ?>assets/images/1.jpg);background-attachment:fixed;min-height:500px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>