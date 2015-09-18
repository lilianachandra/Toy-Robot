<?php
	$typer = $this->position[2];
    if($typer == "north"){
		$this->position[2] = "west";
    }
    elseif($typer == "west"){
        $this->position[2] = "south";
    }
	elseif($typer == "east"){
        $this->position[2] = "north";
    }
    elseif($typer == "south"){
        print_r($typer);
        $this->position[2] = "east";
    }
        
    $this->tables->setRobotPlace($this);


?>
