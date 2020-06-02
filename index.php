<?php

//phpinfo();

echo 'Requested URL ="' . htmlspecialchars($_SERVER['QUERY_STRING']) . PHP_EOL . '"';

//var_dump($_SERVER['QUERY_STRING']);
//var_dump($_SERVER['DOCUMENT_ROOT']);
//var_dump($_SERVER['SERVER_NAME']);

$alphas = range('A', 'Z');

$cities = [
    'Alabama',
    'Bogota',
    'Tokyo',
    'Helsinki',
    'Rio',
    'Berlin',
    'Prague',
    'Oslo',
    'Dortmund',
    'Liverpool',
    'Liverpool',
    'Liverpool',
    'Liverpool',
    'Moscow',
    'London',
];

$dunno = [];

foreach ($cities as $city) {
    $char = $city[0];
    if (isset($dunno[$char]))
    {
        $dunno[$char] = [$city];

    } else {
        $dunno[$char][] = $city;
    }
}

print_r($dunno);

$sortedCities = [];

foreach ($cities as $city) {
    $firstCharacter = $city[0];

    if (!isset($sortedCities[$firstCharacter])) {
        $sortedCities[$firstCharacter] = [];
    }

    $sortedCities[$firstCharacter][] = $city;
}

uksort($sortedCities, fn (string $a, string $b): int => $a <=> $b);

$a = [
    3 => [],
    2 => [],
    -53 => [],
    1 => [],
    32 => [],
];

uksort($a, function (int $i1, int $i2): int {
   if ($i1 > $i2) {
       return 1;
   } else if ($i1 === $i2) {
       return 0;
   } else {
       return -1;
   }
});

print_r($sortedCities);
