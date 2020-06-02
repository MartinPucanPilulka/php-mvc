<?php

$sortedCities = [];

foreach ($cities as $city) {
    $firstCharacter = $city[0];

    if (!isset($sortedCities[$firstCharacter])) {
        $sortedCities[$firstCharacter] = [];
    }

    $sortedCities[$firstCharacter][] = $city;
}

var_dump($sortedCities);
