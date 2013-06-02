<?php
class Home extends CI_Model {

    public $html;
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function setContent()
    {        
        $this->html = $this->load->view("home",'',true);        
    }
    
    function getContent()
    {
        $this->setContent();
        return $this->html;
    }
}
?>
