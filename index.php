<?php
include "./vendor/autoload.php";
$conn= new MongoDB\Client("mongodb://localhost");

$collection = $conn->leandro->usuarios;
// $insertManyResult = $collection->insertMany([
//     [
//         'users' => 'admin',
//     ],
//     [
//         'users' => 'leandro',
//     ],
// ]);

// printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());

// var_dump($insertManyResult->getInsertedIds());
// $collection = (new MongoDB\Client)->test->zips;

$cursor = $collection->find();

foreach ($cursor as $document) {
    echo $document['users'], "\n";
}