<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Abc School</title>

    <!-- Bootstrap Core CSS -->
     <link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/morrisjs/morris.css" rel="stylesheet">
   

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>assets/vendor/metisMenu/custom.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/popper/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/script.js"></script>

<script>

$(document).ready(function(){
    <?php if($this->session->userdata('upd')=="success")
   { ?>
    alert('updated successfully');
$('#myModal').modal('show');

<?php 
$this->session->unset_userdata('upd');
}elseif($this->session->userdata('upd')=="fail"){ ?>
    alert('not updated');

 <?php 
$this->session->unset_userdata('upd');

 } if($this->session->userdata('upl')=="error"){
     ?>
     $('#myedit').modal('show');
<?php

 }

?>
<?php if($this->session->userdata('del')=="success"){
    ?>
    alert('deleted successfully');
    <?php 
       $this->session->unset_userdata('del');
      $this->session->sess_destroy();
        redirect('admin?delete=1');
   
    }elseif($this->session->userdata('del')=="fail"){ ?>
        alert('not deleted');
        <?php 
          $this->session->unset_userdata('del');
        } ?>
        $('.c1').click(function(){
              <?php if($this->session->userdata('upl')=="error"){ ?>
            location.reload(true);
            <?php } ?>
        });
});
</script>
</head>

<body>

   