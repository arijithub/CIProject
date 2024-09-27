<?php include 'header.php' ?>
             

         <?php include 'navbar.php' ?>

           
          <div style="margin-top:-25%">
    <marquee direction = "right"><h3>About Page Content</h3></marquee>
</div>
  <?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
        <div class="container-fluid">
  <form class="form-horizontal" action="<?php echo base_url('Admin/about_view_insert'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Title:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address:</label>
      <div class="col-sm-4">          
         <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
      </div>
    </div>

     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default" name="aboutSubmit" value="Add">Submit</button>
      </div>
    </div>
  </form>

 </div>
  
         
        </div>
        <!-- /#page-wrapper -->


    </div>
    <!-- /#wrapper -->
    
<?php include 'modal.php' ?>

    <!-- jQuery -->
   <?php include 'footer.php' ?>
