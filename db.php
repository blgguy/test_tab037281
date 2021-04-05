<?php
function esc($var)
{
    $enc = htmlspecialchars($var, ENT_QUOTES);
    return $enc;
}

class DB{

    private $host       = 'localhost';
    private $username   = 'root';
    private $password   = '';
    private $database   = 'market';
    
    protected $Jigo;
    
    public function __construct(){

        if (!isset($this->Jigo)) {
            
            $this->Jigo = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->Jigo) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->Jigo;
    }
}
?>