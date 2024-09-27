<?php
$this->load->model('adminModel');
		if(!$this->adminModel->is_user_loged_in() )	
		{
	     redirect('admin');
	 }