<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model {

	public function loginCheckMethodModel()
	{
		$data = array(
			'y_email'    => $this->input->post('y_email'),
		    'y_password' => $this->input->post('y_password')
		);
		$query = $this->db->get_where('admin', $data);

		if($query->num_rows() == 1)
		{			
			$sess_array = array(
					'y_email' => $query->row(0)->y_email,
					'y_password' => $query->row(0)->y_password
				);
			
			$this->session->set_userdata($sess_array);
			return "hello";
		}

	}

	public function is_user_loged_in()
	{
		return $this->session->userdata('y_email') != FALSE;
	}

// within admin side home.php
	public function home_view_insert(){
  $query=$this->db->get('home');
		if($this->input->post('userSubmit')){
        

            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

            if(!empty($_FILES['picture1']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture1']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture1')){
                    $uploadData = $this->upload->data();
                    $picture1 = $uploadData['file_name'];
                }else{
                    $picture1 = '';
                }
            }else{
                $picture1 = '';
            }
            
            if(!empty($_FILES['picture2']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture2']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture2')){
                    $uploadData = $this->upload->data();
                    $picture2 = $uploadData['file_name'];
                }else{
                    $picture2 = '';
                }
            }else{
                $picture2 = '';
            }
            if(!empty($_FILES['picture3']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture3']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture3')){
                    $uploadData = $this->upload->data();
                    $picture3 = $uploadData['file_name'];
                }else{
                    $picture3 = '';
                }
            }else{
                $picture3 = '';
            }
            if(!empty($_FILES['picture4']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture4']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture4')){
                    $uploadData = $this->upload->data();
                    $picture4 = $uploadData['file_name'];
                }else{
                    $picture4 = '';
                }
            }else{
                $picture4 = '';
            }
            
            //Prepare array of user data
            $data = array(
                // 'name' => $this->input->post('name'),
                // 'email' => $this->input->post('email'),
                'title' => $this->input->post('title'),
	            'address'  => $this->input->post('address'),	      
                'picture' => $picture,
                'picture1' => $picture1,
                'picture2' => $picture2,
                'picture3' => $picture3,
                'picture4' => $picture4
            );
            foreach($query->result() as $row)
            {
              $this->session->set_userdata('insert',$row->id);
            }
                   if($query->num_rows()==0)
               {

                $this->db->insert('home', $data);
                
            }else{
            $this->db->set('title',$this->input->post('title'));
             $this->db->set('address',$this->input->post('address'));
              $this->db->set('picture',$picture);
               $this->db->set('picture1',$picture1);
                $this->db->set('picture2',$picture2);
                 $this->db->set('picture3',$picture3);
                  $this->db->set('picture4',$picture4);
                  $this->db->where('id',$this->session->userdata('insert'));
                  $this->db->update('home');
          }
        }
	}

          public function about_view_insert()
          {
            $query=$this->db->get('about');
             foreach($query->result() as $row)
            {
              $this->session->set_userdata('about',$row->id);
            }
            if($this->input->post('aboutSubmit'))
            {            
                    //Prepare array of user data
                    $data = array(
                        // 'name' => $this->input->post('name'),
                        // 'email' => $this->input->post('email'),
                        'title' => $this->input->post('title'),
                        'address'  => $this->input->post('address')
                    );
                    if($query->num_rows()==0)
                    {
                    $this->db->insert('about', $data);
                   
                }
                else{
                     $this->db->set('title',$this->input->post('title'));
             $this->db->set('address',$this->input->post('address'));
             $this->db->where('id',$this->session->userdata('about'));
             $this->db->update('about');
                    
                }
            }
          }

public function useredit()
{
    
   
    $config['upload_path']          = './uploads/images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;

                $this->load->library('upload', $config);
                 if($_FILES['up-file']['name']!='')
                 {
                
                     if( ! $this->upload->do_upload('up-file'))
                {
                        $msg = array('err'=>$this->upload->display_errors());

                      $this->session->set_userdata('upd',"");
                      $this->session->set_userdata('upl',"error");
                      $this->session->set_userdata('upm',$msg['err']);
                         redirect($this->session->userdata('sev'));

                }
            
                
                        $dataup = array('upload_data' => $this->upload->data());

/********/
      $path=$dataup['upload_data']['file_name'];
  }

            $users=array(
                           'y_email'=> $this->input->post('email'),
                           'y_password'=> $this->input->post('password')
                       ); 
            $this->session->set_userdata($users);
            $this->db->set('name',$this->input->post('username'));
            $this->db->set('phone',$this->input->post('phone'));
            $this->db->set('y_email',$this->input->post('email'));
            $this->db->set('y_password',$this->input->post('password'));
             $this->db->set('created',$this->input->post('crt'));
             if(isset($path))
              $this->db->set('picture',$path);

            $this->db->where('id',$this->input->post('id'));
            $this->db->update('admin');
            return $this->db->affected_rows();

}
 public function faculty_view_insert(){
        if($this->input->post('facultySubmit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
  
            //Prepare array of user data
            $data = array(
                'dept' => $this->input->post('dept'),
                'course' => $this->input->post('course'),
                'name' => $this->input->post('name'),
                'designation' => $this->input->post('designation'),
                'qualification'  => $this->input->post('qualification'),          
                'picture' => $picture
            );
            $this->db->insert('faculty', $data);
        }
    }
public function dbdel()
{
                    $userd=array(
                           'y_email'=> $this->session->userdata('y_email'),
                           'y_password'=> $this->session->userdata('y_password')
                       ); 
                       $this->db->delete('admin',$userd);
                       return $this->db->affected_rows();  

}
}
