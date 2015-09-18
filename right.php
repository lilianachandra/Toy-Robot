 <?php

    $typer = $this->position[2];
	if($typer == "north"){
        $this->position[2] = "east";
    }
    elseif($typer == "west"){
		$this->position[2] = "north";
    }
    elseif($typer == "east"){
        $this->position[2] = "south";
    }
    elseif($typer == "south"){
        $this->position[2] = "west";
    }
        
    $this->tables->setRobotPlace($this);
    
?>
