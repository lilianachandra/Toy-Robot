<?php
	if(isset($this->tables)){
		$typer = $this->position[2];
            
        if($typer == "north"){
            $this->position[0] = $this->position[0] + 1;
        }
        elseif($typer == "west"){
			$this->position[1] = $this->position[1] - 1;
        }
        elseif($typer == "east"){
            $this->position[1] = $this->position[1] + 1;
        }
        elseif($typer == "south"){
            $this->position[0] = $this->position[0] - 1;
        }
            
        $this->tables->setRobotPlace($this);
    }
?>
