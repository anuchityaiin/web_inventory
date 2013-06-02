<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	}
        
        public function login()
        {
            
            $this->load->model("member");
            $id = $this->member->genID();            
            $ss = $this->member->decodeSession($id);
            $this->member->setCookie($ss);
            $data["refresh"]='Loading...';
            $data["refresh"]='../index.php';
            $this->load->view("refresh",$data);
        }
        
        public function logout()
        {
            $this->load->model("member");
            $this->member->deleteCookie();
            $data["refresh"]='Loading...';
            $data["refresh"]='../index.php';
            $this->load->view("refresh",$data);
        }
        
        public function register()
        {
            echo 'Register';
        }
}

/* End of file Submit.php */
/* Location: ./application/controllers/Submit.php */