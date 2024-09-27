<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('adminModel');
		//$this->session->set_userdata('sev','/admin');
		 $this->session->set_userdata('sev',$this->uri->slash_segment(1)); 

		if( $this->adminModel->is_user_loged_in() )	{
			/*redirect('admin');*/
			//$this->session->set_userdata('firs',"act");
		$this->session->userdata('sev');
	
			$this->load->view('admin/admin_home_view');

		}
		else
		{
			$this->load->view('admin/admin_log_in_view');
		}
	}
	public function loginCheckMethod()
	{
		$this->load->model('adminModel');
	 

		 //$this->session->set_userdata('sev',$this->uri->slash_segment(1).$this->uri->slash_segment(2)); 
		    
		if( $this->adminModel->is_user_loged_in() )	{
			
			$this->load->view('admin/admin_home_view');
			
		}
		else{

			if($this->adminModel->loginCheckMethodModel()){
			

				$this->load->view('admin/admin_home_view');


			}else{
				$this->load->view('admin/admin_log_in_view');
			}			
		}
	}
	public function logout()
	{
		
		$this->session->unset_userdata('y_email');
		$this->session->unset_userdata('y_password');

		$this->session->sess_destroy();
		redirect('admin?logout=success');
	} 
	public function home_view_insert(){
		//$this->session->set_userdata('sev','/admin/home_view_insert');
	 $this->session->set_userdata('sev',$this->uri->slash_segment(1).$this->uri->slash_segment(2)); 
          $this->load->model('adminModel');
		if(!$this->adminModel->is_user_loged_in() )	
		{
	     redirect('admin');
	     }
		$abc = $this->adminModel->home_view_insert();
		$this->load->view('admin/home_view');
         if(isset($abc)){
			$data['user_data'] = $abc;
			
		}
		else
		{
			
		}
	}
	public function about_view_insert()
	{
		$this->load->model('adminModel');
		if(!$this->adminModel->is_user_loged_in() )	
		{
	     redirect('admin');
	     }
	      $this->session->set_userdata('sev',$this->uri->slash_segment(1).$this->uri->slash_segment(2)); 
		//$this->session->set_userdata('sev','/admin/about_view_insert');
		$about = $this->adminModel->about_view_insert();
		$this->load->view('admin/about_view');
         if(isset($about)){
			$data['user_data'] = $about;
			
		}
		else
		{
			
		}
	}
	public function home_view_edit()
	{
         
          $this->load->model('adminModel');
         
          if(!$this->adminModel->is_user_loged_in() )	
		{
	     redirect('admin');
	     }
		$num=$this->adminModel->useredit();
		if($num==0)
		{
			
		redirect($this->session->userdata('sev'));	
		}
		elseif($num>0)
		{
			$this->session->set_userdata('upd',"success");
			
			redirect($this->session->userdata('sev'));
		    }
		else
		{
			$this->session->set_userdata('upd',"fail");
		
		redirect($this->session->userdata('sev'));		
		}
	}
	public function faculty_view_insert()
	{
		$this->session->set_userdata('sev','/admin/faculty_view_insert');
		$this->session->unset_userdata('fir');
		$this->session->unset_userdata('firs');
		$this->load->model('adminModel');
		$about = $this->adminModel->faculty_view_insert();
		$this->load->view('admin/faculty_view');
         if(isset($about)){
			$data['user_data'] = $about;
			
		}
		else
		{
			
		}
	}
	public function userdel()
	{ 
	   
		$this->load->model('adminModel');
		if(!$this->adminModel->is_user_loged_in() )	
		{
	     redirect('admin');
	     }
		$dnum=$this->adminModel->dbdel();
		echo $dnum;
		if($dnum==1){
			$this->session->set_userdata('del',"success");
			redirect($this->session->userdata('sev'));
		}
		else{
			$this->session->set_userdata('del',"fail");
			redirect($this->session->userdata('sev'));
		}

	}
}
?>
