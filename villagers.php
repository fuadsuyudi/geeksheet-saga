<?php

function FindAverage($person)
{
    $born = $kills = $sum_kills = [];
    $kill = 1;
    $old = 0;

    foreach ($person as $key => $val) {
        $person_born = $val[1] - $val[0];
        if ($person_born > 1) {
            $born[] = $person_born;
        } else {
            echo -1;

            exit;
        }
    }

    for ($i=0; $i <= max($born); $i++) { 
        $kills[] = $old;

        $dum = $kill;
        $kill += $old;
        $old = $dum;

        if(in_array($i, $born)){
            $sum_kills[] = array_sum($kills);
        }
    }

    echo array_sum($sum_kills) / count($person);
}

// [
//      [Age, Year], person A
//      [Age, Year], person B
//      [Age, Year], person ...  
// ]
FindAverage(
    [
        [10, 12], 
        [13, 17]
    ]
);
