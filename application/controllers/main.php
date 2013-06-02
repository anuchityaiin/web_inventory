<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
	{
            $this->load->model("member");
            if($this->member->chackSession())
            {
                $data["username"]="anuchit";
                $data["sidebar"]="anuchit";
                
                // set header
                $this->load->model("header");
                $data["header"] = $this->header->getContent();
                
                // set Content home
                $this->load->model("home");
                $data["container"]=  $this->home->getContent();                
                $this->load->view("main",$data);
            }
            else
            {
                $this->load->view("login");
            }
	}
}