<?php
class Header extends CI_Model {

    public $html;
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function setContent()
    {   
        $data["title"] = "Home";
        $data["description"] = "description";
        $data["author"] = "author";
        $this->html = $this->load->view("header",$data,true);        
    }
    
    function getContent()
    {
        $this->setContent();
        return $this->html;
    }
}
?>