<?php

// Ask user for input measure unit (tsp), (tbsp), (floz), (cp), (pt).

// Ask user for measurement float type

// Ask what unit to convert to (tsp), (tbsp), (floz), (cup), (pint).


//------------Functions for converting measurements-----------

function tsp($convert_from, $measurement) {
    // echo $measurement;
    switch($convert_from) {
        case 'tbsp':
            $converted = $measurement * 3.0;
            return $converted;
            break;
        case 'floz':
            $converted = $measurement * 6.0;
            return $converted;
            break;
        case 'cup':
            $converted = $measurement * 48.0;
            return $converted;
            break;
        case 'pint':
            $converted = $measurement * 96.0;
            return $converted;
            break;
    }
}

function tbsp($convert_from, $measurement) {
    switch($convert_from) {
        case 'tsp':
            $converted = $measurement * .3333;
            return $converted;
            break;
        case 'tbsp':
            return "Those units are the same.";
            break;
        case 'floz':
            $converted = $measurement * 2.0;
            return $converted;
            break;
        case 'cup':
            $converted = $measurement * 16.0;
            return $converted;
            break;
        case 'pint':
            $converted = $measurement * 32.0;
            return $converted;
            break;
    }
}

function floz($convert_from, $measurement) {
    switch($convert_from) {
        case 'tsp':
            $converted = $measurement * .1667;
            return $converted;
            break;
        case 'tbsp':
            $converted = $measurement * .5;
            return $converted;
            break;
        case 'cup':
            $converted = $measurement * 8.0;
            return $converted;
            break;
        case 'pint':
            $converted = $measurement * 16.0;
            return $converted;
            break;
    }
}

function cup($convert_from, $measurement) {
    switch($convert_from) {
        case 'tsp':
            $converted = $measurement * .0208;
            return $converted;
            break;
        case 'tbsp':
            $converted = $measurement * .0625;
            return $converted;
            break;
        case 'floz':
            $converted = $measurement * .125;
            return $converted;
            break;
        case 'pint':
            $converted = $measurement * 2.0;
            return $converted;
            break;
    }
}

function pint($convert_from, $measurement) {
    switch($convert_from) {
        case 'tsp':
            $converted = $measurement * .0104;
            return $converted;
            break;
        case 'tbsp':
            $converted = $measurement * .0313;
            return $converted;
            break;
        case 'floz':
            $converted = $measurement * .0625;
            return $converted;
            break;
        case 'cup':
            $converted = $measurement * .5;
            return $converted;
            break;

    }
}

//-------Function to figure out whis conversion function to run--------------------
function convert_to($unit_to, $measurement, $unit_from)
{
    switch($unit_to) {
        case 'tsp':
            return tsp($unit_from, $measurement);
            break;
        case 'tbsp':
            return tbsp($unit_from, $measurement);
            break;
        case 'floz':
            return floz($unit_from, $measurement);
            break;
        case 'cup':
            return cup($unit_from, $measurement);
            break;
        case 'pint':
            return pint($unit_from, $measurement);
            break;
    }
    
}


//------------------------Getting user input------------------------------
echo "What is your unit of measure? (tsp), (tbsp), (floz), (cup), (pint)" . PHP_EOL;
$unit_from = strtolower(trim(fgets(STDIN)));

echo "What is your measurement?" . PHP_EOL;
$measure_num = strtolower(trim(fgets(STDIN)));

echo "What unit would you like to convert it to? (tsp), (tbsp), (floz), (cup), (pint)" . PHP_EOL;
$unit_to = strtolower(trim(fgets(STDIN)));

if ($unit_to == $unit_from) {
    echo "Those units are the same." . PHP_EOL;
}else {
    echo "There are " . convert_to($unit_to, $measure_num, $unit_from) . " $unit_to in $measure_num $unit_from." . PHP_EOL;
}
