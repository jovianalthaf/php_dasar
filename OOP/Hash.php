<?php
// $person = [
//     // key
//     "jovian" => [
//         "name" => "Jovian", //value
//         "age" => 22, //value
//     ],
//     "caca" => [
//         "name" => "Caca",
//         "age" => 20,
//     ],

// ];

// foreach ($person as $key => $value) {
//     echo "$key Nama : {$value['name']} " . PHP_EOL;
//     echo "$key Age = {$value['age']} " . PHP_EOL;
// }


// Key dalam array bisa digunakan untuk mengelompokkan data berdasarkan kategori tertentu.
$products = [
    'electronics' => ['TV', 'Phone', 'Laptop'],
    'groceries' => ['Apple', 'Banana', 'Carrot']
];

foreach ($products as $category => $items) {
    echo "Category: $category" . PHP_EOL;
    foreach ($items as $item) {
        echo "- $item" . PHP_EOL;
    }
}

// tidak perlu key karena tidak membutuhkan posisi atau index elemen pada array 
$tickets = [
    ['id' => 1, 'name' => 'VIP', 'price' => 500, 'quantity' => 10, 'max_buy' => 2],
    ['id' => 2, 'name' => 'Regular', 'price' => 200, 'quantity' => 50, 'max_buy' => 5],
];

foreach ($tickets as $ticket) {
    echo "ID: {$ticket['id']}" . PHP_EOL;
    echo "Name: {$ticket['name']}" . PHP_EOL;
    echo "Price: {$ticket['price']}" . PHP_EOL;
    echo "Quantity: {$ticket['quantity']}" . PHP_EOL;
    echo "Max Buy: {$ticket['max_buy']}" . PHP_EOL;
    echo str_repeat("-", 20) . PHP_EOL; // Separator
}
