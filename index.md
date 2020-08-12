# Geekseat Witch Saga
## Return of The Coder! 

If given 2 .. n people whose age of death and year of death are known, it will be found the average number of people who were killed by a witch in the year of birth of those people.

to determine the number of people the age at death and the year of death are :
```php
$person = [
  [10, 12], // [Age, Year] person A
  [13, 17], // [Age, Year] person B
  [..n, ..n], // [Age, Year] person n integer 
]
```

* * *

then the programmer will finish it with :

1. determine the birth age of each person
* if age is more than 1 then it will count all ages of people.
* if it is less than 1 it will give -1 or wrong data.
```php
foreach ($this->person as $key => $val) {
    $person_born = $val[1] - $val[0];
    if ($person_born > 1) {
      $born[] = $person_born;
    } else {
      return -1;

      exit;
    }
  }
```

2. count how many people are killed by the dark witch each year
```php
for ($i=0; $i <= max($born); $i++) { 
  $kills[] = $old;

  $dum = $kill;
  $kill += $old;
  $old = $dum;

  if(in_array($i, $born)){
    $sum_kills[] = array_sum($kills);
  }
}
```

3. counting the average person killed by the dark witch each year
```php
array_sum($sum_kills) / count($this->person);
```

then the programmer was able to solve the problem and killing will be stopped.

Finish!
