<div class="hm grid_4 col-md-8" style="background:DodgerBlue;height:50px;">
<?php $query=$this->db->get('home'); 
foreach($query->result() as $row)
{ ?>
<h3 style="padding-top:1%;padding-bottom:-10%;color:#fff;">Welcome To <?php echo $row->title;  }?></h3>
</div>
 <div class="grid_4 col-md-1"></div>
<div class="hm1 grid_4 col-md-8" style="background:#fff;">
<p style="text-align:left;padding-top:5%;color:#000000;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</p>
</div>