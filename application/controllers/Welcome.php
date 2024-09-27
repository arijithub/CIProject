<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->session->set_userdata("fv","457");
		$this->load->model('Home_model');
		$query=$this->Home_model->front_view();
		$data['result']=$query->result();
		$this->load->view('client/client_header',$data);
		//$this->load->view('client/client_navbar');
		//$this->load->view('client/client_home');
		$this->load->view('client/client_footer');

	}
	public function about_view()
	{
		$this->load->model('Home_model');
		$query=$this->Home_model->front_view();
		$data['result']=$query->result();
		$query1=$this->Home_model->client_about();
		$data1['result1']=$query1->result();
		$this->load->view('client/client_header',$data);		
		//$this->load->view('client/client_navbar');
		$this->load->view('client/client_about',$data1);
		$this->load->view('client/client_footer');
	}
	public function faculty_view()
	{
        
		$this->load->model('Home_model');
		$query=$this->Home_model->front_view();
		$data['result']=$query->result();
		$fact=$this->Home_model->faculty_view();
		$data_fac['fact_result']=$fact->result();
		$this->load->view('client/client_header',$data);		
		$this->load->view('client/client_navbar');
		$this->load->view('client/client_faculty');
		$this->load->view('client/client_footer');
		
	}
	public function feedback(){
    
		$this->load->model('Home_model');
		$query=$this->Home_model->front_view();
		$data['result']=$query->result();
		$this->load->view('client/client_header',$data);
		$this->load->view('client/client_navbar');
	    $this->load->view('client/client_fback');
	    $this->load->view('client/client_footer');
    
	}

		public function features_view(){
    
		$this->load->model('Home_model');
		$query=$this->Home_model->front_view();
		$data['result']=$query->result();
		$this->load->view('client/client_header',$data);
		$this->load->view('client/client_navbar');
	    $this->load->view('client/client_news');
	    $this->load->view('client/client_footer');
    
	}

		public function service_view(){
    
		$this->load->model('Home_model');
		$query=$this->Home_model->front_view();
		$data['result']=$query->result();
		$this->load->view('client/client_header',$data);
		$this->load->view('client/client_navbar');
	    $this->load->view('client/client_service');
	    $this->load->view('client/client_footer');
    
	}

		public function career_view(){
    
		$this->load->model('Home_model');
		$query=$this->Home_model->front_view();
		$data['result']=$query->result();
		$this->load->view('client/client_header',$data);
		$this->load->view('client/client_navbar');
	    $this->load->view('client/client_career');
	    $this->load->view('client/client_footer');
    
	}
	public function department_view(){
    
		$this->load->model('Home_model');
		$query=$this->Home_model->front_view();
		$data['result']=$query->result();
		$this->load->view('client/client_header',$data);
		$this->load->view('client/client_navbar');
	    $this->load->view('client/client_department');
	    $this->load->view('client/client_footer');
    
	}
}
