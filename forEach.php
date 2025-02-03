<?php
$names = ["Jovian", "Althaf", "Sanjaya"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Halo $name" . PHP_EOL;
}

$person = [
    "first_name" => "Jovian",
    "middle_name" => "Althaf",
    "last_name" => "Sanjaya",
];

foreach ($person as $key => $value) {
    echo "$key : $value";
}

