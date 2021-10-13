<?php

function getOddNumber(int $maxValue): Iterator
{
    for($i = 0; $i<= $maxValue; $i++){
        if($i % 2 == 0){
            yield $i; // generate array to array
        }
    }
}

$oddNumb = getOddNumber(100);

foreach($oddNumb as $value){
    echo "odd : $value" . PHP_EOL;
}