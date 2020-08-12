<?php

class Average {
    public $person;

    function set_person($person) {
        $this->person = $person;
    }

    function get_average() {
        $born = $kills = $sum_kills = [];
        $kill = 1;
        $old = 0;

        foreach ($this->person as $key => $val) {
            $person_born = $val[1] - $val[0];
            if ($person_born > 1) {
                $born[] = $person_born;
            } else {
                return -1;

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

        return array_sum($sum_kills) / count($this->person);
    }   
}

$find_avg = new Average();

// [
//      [Age, Year], person A
//      [Age, Year], person B
//      [Age, Year], person ...  
// ]
$person = [
    [10, 12], 
    [13, 17]
];

$find_avg->set_person($person);

echo $find_avg->get_average();
