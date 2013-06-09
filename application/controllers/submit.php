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
            $u = addslashes($this->input->post('u'));
            echo 'Register';
        }
        
        public function checkUsername()
        {
            $u = addslashes($this->input->post('u'));
            $res = array();
            if($u!=''){
                if(preg_match('/^[a-z\d]{4,30}$/i',$u)){
                    $this->load->database();
                    $query = $this->db->query('SELECT * FROM `admin` WHERE `username` LIKE \''.$u.'\' LIMIT 0, 1');
                    if($query->num_rows()==0){
                        $res["res"] = true;
                        $res["data"] = array("msg" => "Yes!");
                    }
                    else{
                        $res["res"] = false;
                        $res["data"] = array("msg" => "มีผู้ใช้ชื่อนี้แล้ว");
                    }
                }
                else{
                    $res["res"] = false;
                    $res["data"] = array("msg" => "รูปแบบไม่ถูก");
                }          
            }
            else{
                $res["res"] = false;
                    $res["data"] = array("msg" => "กรุณาตั้งชื่อผู้ใช้");
            }
            echo json_encode($res);
        }
        
        public function checkPassword(){
            $p = addslashes($this->input->post('p'));
            $len = strlen($p);
            $res = array();
            if($len<7){
                $res["res"] = false;
                $res["data"] = array("msg" => "NO!");
            }
            else if($len>=7){
                $res["res"] = true;
                $res["data"] = array("msg" => "Yes!");
            }
            echo json_encode($res);
        }
}

/* End of file Submit.php */
/* Location: ./application/controllers/Submit.php */