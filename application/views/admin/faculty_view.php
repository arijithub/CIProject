<?php include 'header.php' ?>
             

         <?php include 'navbar.php' ?>

           
          <div style="margin-top:-25%">
    <marquee direction = "right"><h3>Faculty Page Content</h3></marquee>
</div>
  <?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
        <div class="container-fluid">
  <form class="form-horizontal" action="<?php echo base_url('Admin/faculty_view_insert'); ?>" method="post" enctype="multipart/form-data">
     <div class="form-group">
      <label class="control-label col-sm-2" for="dept">Dept.:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="dept" placeholder="Enter dept" name="dept">
      </div>
      </div>
           <div class="form-group">
      <label class="control-label col-sm-2" for="course">Course:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="course" placeholder="Enter course" name="course">
      </div>
      </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="pic">picture</label>
        <div class="col-sm-4">           
           <input class="form-control" type="file" name="picture" />
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Designation:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Qualification:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="qualification" placeholder="Enter qualification" name="qualification">
      </div>
    </div>

     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default" name="facultySubmit" value="Add">Submit</button>
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
