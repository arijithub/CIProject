<?php include 'header.php' ?>
             

         <?php include 'navbar.php' ?>

           
          <div style="margin-top:-25%">
    <marquee direction = "right"><h3>Home Page Content</h3></marquee>
</div>
  <?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
        <div class="container-fluid">
  <form class="form-horizontal" action="<?php echo base_url('Admin/home_view_insert'); ?>" method="post" enctype="multipart/form-data">
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
      <label class="control-label col-sm-2" for="pwd">picture</label>
      <div class="col-sm-4">           
         <input class="form-control" type="file" name="picture" />
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">picture1</label>
      <div class="col-sm-4">           
         <input class="form-control" type="file" name="picture1" />
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">picture2</label>
      <div class="col-sm-4">           
         <input class="form-control" type="file" name="picture2" />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">picture3</label>
      <div class="col-sm-4">           
         <input class="form-control" type="file" name="picture3" />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">picture4</label>
      <div class="col-sm-4">           
         <input class="form-control" type="file" name="picture4" />
      </div>
    </div>

     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default" name="userSubmit" value="Add">Submit</button>
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
