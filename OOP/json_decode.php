<?php

// MENGUBAH JSON MENJADI OBJEK
// $json = '{"name": "John", "age": 30}';
// $data = json_decode($json);
// // var_dump($data);

// echo $data->name;


// Mengubah JSON menjadi array asosiatif PHP:
// $json = '{"name": "John", "age": 30}';
// $data = json_decode($json, true);  // Menambahkan parameter true

// // Mengakses data sebagai array asosiatif
// echo $data['name'];  // Output: John
// echo $data['age'];   // Output: 30

$json = '{
    "user": {
        "name": "Jane",
        "email": "jane@example.com"
    },
    "tasks": [
        {"task": "Do homework", "completed": true},
        {"task": "Clean house", "completed": false}
    ]
}';

$data = json_decode($json, true);  // true Menjadi array asosiatif, default objek/false

echo $data['user']['name'];  // Output: Jane
echo $data['tasks'][1]['task'];  // Output: Do homework
