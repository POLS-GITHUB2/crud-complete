<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin
{
	public function index()
	{
		$this->load->view('admin/login');
	}
	
	public function UserLogin()
	{
        
    /*  $this->form_validation->set_rules('uname','UserName','required|matches|trim|max_length[8]');
        $this->form_validation->set_rules('pass','Password','required|matches|trim');  */
       
        $this->form_validation->set_rules('uname','UserName','required|trim|max_length[8]');
        $this->form_validation->set_rules('pass','Password','required|trim');
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run())
		{
            $username	=	$this->input->post('uname');
			$password	=	$this->input->post('pass');
            
            $this->load->model('login_model');
            $result	 =	$this->login_model->userlog($username, $password);
            
			if($result)
			{
                /* How to Define id by session under the code*/
                
                $this->session->set_userdata('uname', $result);
                $this->load->view('admin/dashboard.php');  
			}
			else
			{
				$this->load->view('admin/login');
			}
		}      
		else
		{
           $this->load->view('admin/login');
		}
	}
    
    public function Dashboard()
    {
        $this->load->view('admin/dashboard.php');
    }
    
    public function table()
    {
       // $this->load->view('admin/dataTable.php');
    }
}

	