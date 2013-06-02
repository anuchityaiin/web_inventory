<?
class Member extends CI_Model {

    private $s = "O_Om_0ooouys%$#@!*()_++?><mnbbvvcxxzzasdfgghhjkll;][[poiuuyytrrewqq";
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
   //
    }
    
    function genID()
    {
        return "1".dechex(time()).$this->randomNumber(6);
    }
    
    function randomNumber($length,$type = 0)
    {
        if($type==0)
            $p = "9876543210";
        if($type==1)
            $p = "9876543210abcdefghtijklmnopqstuvwxyz";
	$n = "";
	for($i=0 ;$i<$length;$i++)
            $n = $n. substr($p,(rand()%strlen($p)),1);
	return $n;
    }
    
    function chackLogin()
    {
        $n = $this->config->item('session_name');
        if($this->getCookie($n)!="")
        {
            return true;
        }
        else
            return false;
    }
    
    function decodeSession($id)
    {
        $code = "";
        $ch = $this->randomNumber(5);
        $de = decbin($ch);
        for($i = 0 ; $i < strlen($id); $i++)
        {
            if($i < strlen($de) && @$de[$i]==1)
                $code .= $this->randomNumber(1).$id[$i];
            else
                $code .= $id[$i];
        }
        return $ch.$code.$this->randomNumber(50, 0);
    }
    
    function encodeSession($code)
    {
        $ch = substr($code, 0,5);
        $code = substr($code, 5);
        $de = decbin($ch);
        $id = '';
        $j = 0;
       for($i = 0 ; $i < strlen($code); $i++)
        {
           if((strlen($de) > $j) && $de[$j]==1)
            {
               $i++;
                $id .= $code[$i];
            }
            else
                $id .= $code[$i];
            
            $j++;
        }  
        return substr($id, 0,15);
    }

    function setPass($p)
    {
        return md5(md5($p.$this->config->item('slofs').$p).md5($p)).md5($this->config->item('slofs').$p);
    }
    
    function setCookie($data,$name='')
    {
        $name=$this->config->item('session_name');        
        setcookie($name, $data ,  time()+60*60*24*30,
                $this->config->item('cookie_path'));
    }
    
    function chackSession()
    {
        $id = $this->encodeSession($this->getCookie());
        if($id!='' && strlen($id)==15)
        {
            $this->setCookie($this->decodeSession($id));
            return true;
        }
        else
        {
            $this->deleteCookie();
            return false;
        }
    }
    
    function getCookie($name='')
    {
        $name=$this->config->item('session_name'); 
        return @$_COOKIE[$name];
    }

    function deleteCookie($name='')
    {
        return $this->setCookie("");
    }
}
?>