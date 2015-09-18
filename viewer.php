<?php
class Viewport{
    
    private $viewerdatas, $tables;
    
    public function setTable($tables=array(5,5))
	{
		$this->tables = $tables;
	}
	
	public function getviewerdatas()
	{
		return $this->viewerdatas;
	}
	
    
    public function setRobotPlace($robot){
        $posisi = $robot->getPosition();
        
		if($posisi[0] > $this->tables[0] - 2){
			$posisi[0] = $this->tables[0] - 1;
		}
		elseif($posisi[0] < 0){
			$posisi[0] = 0;
		}
		else{
			$posisi[0] = $posisi[0];
		}
        
		if($posisi[1] > $this->tables[1] - 2){
			$posisi[1] = $this->tables[1] - 1;
		}
		elseif($posisi[1] < 0){
			$posisi[1] = 0;
		}
		else{
			$posisi[1] = $posisi[1];
		}
		
        $robot->setPosition($posisi);
        $this->createViewPort();
        
        $this->viewerdatas[$posisi[0]][$posisi[1]] = $robot->name." - ".$posisi[2];
        $robot->setCurrentViewPort($this);
    }
    
    public function createViewPort(){
        $this->viewerdatas = array();
        for($i=0; $i<$this->tables[0]; $i++){
            for($j=0; $j<$this->tables[1]; $j++){
               $this->viewerdatas[$i][] = NULL;
            }
        }
    }
    
}
