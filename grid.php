<?php

function createMap($col, $row){
    $grid = null;

    for($i = 0; $i < $row; $i++){
        for($j = 0; $j < $col; $j++){
            $grid[$i][$j] = 0;
        }
    }
    return $grid;
}
function CreateSingleShip($id,$row,$col,$length,$direction,$world)
{
    $world[$row][$col] = $id; 

    return $world;
}

function validateShip(){
    isFull == true;
    if ()
}
function createShip($col, $row, $length, $numofShips, $grid){
  
    $id = 0;
    for($i = 0; $i <  $numofShips;){

        $id++;
        $length = rand(2,4);
        $x = rand(0,$row);
        $y = rand(0,$col);
        
        if(($x < $row) && ($y < $col) && ($grid[$x][$y] > 0))
        {
            continue;
        }
        elseif(($x < $row) && ($y < $col) && ($grid[$x][$y] == 0))
        {
            $grid[$x][$y] = $id;
            
        }
        elseif(($x < 0 || $x >= $row) || ($y < 0 || $y >= $col))
        {
            continue;  
        }
        $numofShips--;
        $i++;
    }
    return $grid;
}

echo "<pre>";

print_r(createShip(5,5,1,20,createMap(5,5)));

?>
