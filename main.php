<?php

echo " Welcome to Toy Robot \n\n";

/*relate to robot.php and viewer.php*/
require_once "robot.php";
require_once "viewer.php";

/*for input*/
header("Content-Type: text");
$inputan = fopen("input.txt", "r");

/*create a square tabletop of dimension 5 units * 5 units*/
$tables = new Viewport();
$tables->setTable(array(5,5));
$tables->createViewPort();
$robot = new Robot();



if ($inputan) {
    while (($line = fgets($inputan)) !== false) {
        $moving = explode(" ", $line);
        if(count($moving) == 1){
                
            if(trim($moving[0]) == 'MOVE'){
                $robot->pindah();
            }
            elseif(trim($moving[0]) == "LEFT"){
                $robot->kiri();
                
            }
            elseif(trim($moving[0]) == "RIGHT"){
                $robot->kanan();
                
            }
            elseif(trim($moving[0]) == "REPORT"){
                echo $robot->printReport()."\n";
            }
        }
        else if(count($moving) > 1){
            if($moving[0] == "PLACE"){
                $params = explode(",", $moving[1]);
                $robot->setPosition($params);
                $tables->setRobotPlace($robot);
            }
        }
    }
} else {
    echo "CANNOT OPEN FILE COMMAND!";
} 
fclose($inputan);
if(isset($_GET['detail'])){
    $viewerdatas = $tables->getviewerdatas();
    
    for($x = 0; $x < count($viewerdatas) ; $x++ ){
        for($y=0;$y < count($viewerdatas[$x]); $y++){
            echo $viewerdatas[$x][$y]."\n('$x','$y')\t\t";
        }
        echo "\n\n";
        
    }
}
?>
