<?php
class Robot{
    
    protected $position = array(), $tables;
    public $name = "robot";
    
    public function __construct($position = array(0, 0, 'north')){
        $this->position = $position;
    }
    
    function getPosition(){ return $this-> position;}
    
  
    function setCurrentViewPort($tables){
        $this->tables = $tables;
    }
    
    function setPosition($position = array(0, 0, 'north')){
        $this->position = $position;
        $this->position[2] = strtolower($position[2]);
        
    }
    
    function printReport(){
        return "\n 'position' : [".$this->position[0].", ".$this->position[1]."] \n 'direction' : ".strtoupper($this->position[2]);
    }
   
    function pindah(){
		    require_once "move.php";
    }

	  function kiri(){
		    require_once "left.php";
    }

    function kanan(){
		    require_once "right.php";
    }
}
