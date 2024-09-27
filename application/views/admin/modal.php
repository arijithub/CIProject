     
    <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content1">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <table border="0" style="width:100%">
                      <tr><td style="padding-top:1%"><h4 class="modal-title">User details</h4></td>
                      <td style="width:11%">
                      <a id="test" href="javascript:" class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#myedit">Edit</a>
                      </td>
                    <td style="width:10%"><a onclick="return confirm('Are you sure?');" href="<?php echo base_url('admin/userdel'); ?>" id="deleteUser" class="btn btn-primary">Delete</a></td>
                      <td style="width:4%"><button type="button" class="close" data-dismiss="modal">&times;</button>
                    </td>
                    </tr>

                    </table>
                    </div>
                     <?php 
                   $user=array(
                           'y_email'=> $this->session->userdata('y_email'),
                           'y_password'=> $this->session->userdata('y_password')
                       ); 
                      
                  $this->db->select('*')->from('admin')->where($user);
                  $query=$this->db->get();
                  foreach($query->result() as $row)
                  {
                   ?>
                    <div class="modal-body" style="float:right">
                      <img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="200" width="200">

                    </div>
                    <!-- Modal body -->
                   
                    <div class="modal-body">
                      Username - <?php echo $row->name; ?>

                    </div>
                    <div class="modal-body">
                      Phone -   <?php echo $row->phone; ?>
                    </div>
                    <div class="modal-body">
                      Email -   <?php echo $row->y_email; ?> 
                    </div>
                    <div class="modal-body">
                      Password - <?php echo $row->y_password; ?>
                    </div>
                    <div class="modal-body">
                    created on - <?php echo $row->created; ?>
                    </div>
                    <?php }
                 
                    ?>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- For edit  -->
               <div class="modal fade" id="myedit">
                <div class="modal-dialog">
                  <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <table border="0" style="width:100%"><tr><td><h4 class="modal-title">Edit user details</h4></td>
                      <td><button type="button" class="close c1" data-dismiss="modal">&times;</button></td></tr></table>
                    </div>
                     <form class="form-horizontal" action="<?php echo base_url('Admin/home_view_edit'); ?>" method="post" enctype="multipart/form-data">
                     <?php 
                       $userdat=array(
                           'y_email'=>$this->session->userdata('y_email'),
                           'y_password'=>$this->session->userdata('y_password')
                       );
                     $query=$this->db->get_where('admin',$userdat);
                     foreach($query->result() as $res)
                     { ?>
                     <input type="hidden" name="id" value="<?php echo $res->id; ?>">
                     <input type="hidden" name="sess" value=" <?php echo $this->session->userdata('cl'); ?>">
                     <div class="modal-body">
                     <div class="form-group">
                          <label class="control-label col-sm-2" for="title">Username</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" value="<?php echo $res->name; ?>">
                          </div>
                        </div>
                      </div>
                    <div class="modal-body">
                     <div class="form-group">
                          <label class="control-label col-sm-2" for="title">Phone</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="phn" placeholder="Enter phone" name="phone" value="<?php echo $res->phone; ?>">
                          </div>
                        </div>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                          <label class="control-label col-sm-2" for="title">Email</label>
                          <div class="col-sm-4">
                            <input type="email" class="form-control" id="eml" placeholder="Enter email" name="email" value="<?php echo $res->y_email; ?>">
                          </div>
                        </div>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                          <label class="control-label col-sm-2" for="title">Password</label>
                          <div class="col-sm-4">
                            <input type="password" class="form-control" id="pass" placeholder="Enter password" name="password" value="<?php echo $res->y_password; ?>">
                          </div>
                        </div>
                    </div>
                    <!--<div class="modal-body">
                    <div class="form-group">
                          <label class="control-label col-sm-2" for="title">Created on</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="create"  name="crt" value="<?php echo $res->created; ?>">
                          </div>
                        </div>
                    </div>-->
                    <div class="modal-body">
                    <div class="form-group">
                          <label class="control-label col-sm-2" for="title">Picture</label>
                          <div class="col-sm-4">
                            <input type="file" class="form-control" id="flup"  name="up-file">
                          </div>
                          <?php if($this->session->userdata('upl')=="error")
                       { 
                        
                         echo "<span style='color:red'>".$this->session->userdata('upm')."</span>";
                         $this->session->unset_userdata('upl');
                         $this->session->unset_userdata('upm');
                      
                       }
                       else
                       {
                         echo "";
                       }
                      ?>
                        </div>
                    </div>
                    <?php } ?>
                       
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>