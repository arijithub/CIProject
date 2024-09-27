<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#tab1" class="list-group-item active text-center" role="tab" data-toggle="tab">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>BENGALI
                </a>
                <a href="#tab2" class="list-group-item text-center" role="tab" data-toggle="tab">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>ENGLISH
                </a>
                <a href="#tab3" class="list-group-item text-center" role="tab" data-toggle="tab">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>PHYSICS
                </a>
                <a href="#tab4" class="list-group-item text-center" role="tab" data-toggle="tab">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>CHENISTRY
                </a>
                <a href="#tab5" class="list-group-item text-center" role="tab" data-toggle="tab">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>MATHEMATICS
                </a>
                <a href="#tab6" class="list-group-item text-center" role="tab" data-toggle="tab">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>HISTORY
                </a>                
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab"  style="background-color:#AA33FF;">
                <!-- bengali -->
                <div class="bhoechie-tab-content active" id="tab1" role="tabpanel" style="background-color:#AA33FF;">
                    <div  style="background-color:#AA33FF;">
                      <!-- Nav tabs -->
                      <ul class="tablink list-unstyled" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">U.G. Faculty</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">P.G. Faculty</a></li>
                        
                      </ul>
                       
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'Bengali','course'=>'U.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                          
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'Bengali','course'=>'P.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                        </div>
                        
                      </div>

                    </div>

                </div>
                <!-- english -->
                <div class="bhoechie-tab-content" id="tab2" style="background-color:#AA33FF;">
                    <div>
                      <!-- Nav tabs -->
                      <ul class="tablink list-unstyled" role="tablist">
                        <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab">U.G. Faculty</a></li>
                        <li role="presentation"><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">P.G. Faculty</a></li>
                        
                      </ul>
                       
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home1">
                         <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'English','course'=>'U.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile1">
                         <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'English','course'=>'P.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                        </div>
                        
                      </div>

                    </div>
                </div>
    
                <!-- physics -->
                <div class="bhoechie-tab-content" id="tab3" style="background-color:#AA33FF;">
                    <div>
                      <!-- Nav tabs -->
                      <ul class="tablink list-unstyled" role="tablist">
                        <li role="presentation" class="active"><a href="#home2" aria-controls="home" role="tab" data-toggle="tab">U.G. Faculty</a></li>
                        <li role="presentation"><a href="#profile2" aria-controls="profile" role="tab" data-toggle="tab">P.G. Faculty</a></li>
                      </ul>
                       
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home2">
                         <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'Physics','course'=>'U.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile2">
                           <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'Physics','course'=>'P.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                      </div>
                      </div>

                    </div>
                </div>

                <!-- chemistry -->
                <div class="bhoechie-tab-content" id="tab4" style="background-color:#AA33FF;">
                    <div>
                      <!-- Nav tabs -->
                      <ul class="tablink list-unstyled" role="tablist">
                        <li role="presentation" class="active"><a href="#home3" aria-controls="home" role="tab" data-toggle="tab">U.G. Faculty</a></li>
                        <li role="presentation"><a href="#profile3" aria-controls="profile" role="tab" data-toggle="tab">P.G. Faculty</a></li>
                        
                      </ul>
                       
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home3">
                          <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'Chemistry','course'=>'U.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile3">
                         <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'Chemistry','course'=>'P.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                        </div>
                      </div>

                    </div>
                </div>
                <!-- mathematics -->
                <div class="bhoechie-tab-content" id="tab5" style="background-color:#AA33FF;">
                     <div>
                      <!-- Nav tabs -->
                      <ul class="tablink list-unstyled" role="tablist">
                        <li role="presentation" class="active"><a href="#home4" aria-controls="home" role="tab" data-toggle="tab">U.G. Faculty</a></li>
                        <li role="presentation"><a href="#profile4" aria-controls="profile" role="tab" data-toggle="tab">P.G. Faculty</a></li>
                      </ul>
                       
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home4">
                         <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'Mathematics','course'=>'U.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile4">
                        <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'Mathematics','course'=>'P.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                        </div>

                      </div>

                    </div>
                </div>

                <!-- history -->
                <div class="bhoechie-tab-content" id="tab6" style="background-color:#AA33FF;">
                    <div>
                      <!-- Nav tabs -->
                      <ul class="tablink list-unstyled" role="tablist">
                        <li role="presentation" class="active"><a href="#home5" aria-controls="home" role="tab" data-toggle="tab">U.G. Faculty</a></li>
                        <li role="presentation"><a href="#profile5" aria-controls="profile" role="tab" data-toggle="tab">P.G. Faculty</a></li>
                      </ul>
                       
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home5">
                        <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'History','course'=>'U.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row)
                            {
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row->name; ?><br>
                            Designation:<?php echo $row->designation; ?>
                            Qualification:<?php echo $row->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile5">
                          <?php
                            $this->db->select('*')->from('faculty')->where(array('dept'=>'History','course'=>'P.G.'));
                            $query=$this->db->get();
                            foreach($query->result() as $row1)
                            {
                                 
                              ?>
                          <div style="height:200px;width:200px;border:5px solid black; border-color: green; border-radius:4px;background-color:#5A55A3;float:left;color:white;"><img src="<?php echo base_url('uploads/images/').$row->picture; ?>" height="80px" width="80px" style="margin-top:20px;margin-left:50px;border-radius:50%;border:3px solid white;"> <br>
                            <center>
                            Name:<?php echo $row1->name; ?><br>
                            Designation:<?php echo $row1->designation; ?>
                            Qualification:<?php echo $row1->qualification; ?>
                          </center>
                          </div>
                        <?php } ?>
                        </div>
                      </div>

                    </div>
                </div>                
            </div>
        </div>
  </div>
</div>

         <?php


?>
		
