
<?php 
$books = [
    [
    'name' => 'Androids Dream of Electric Sheep',
    'author' => 'Philip K. Dick',
    'releaseYear' => '1998',
    'purchaseUrl' => 'http://example.com',
    ],
    [
    'name' => 'The C Programming Language Part 2',
    'author' => 'Brian W. Kernighan and Dennis M. Ritchie',
    'releaseYear' => '1980',
    'purchaseUrl' => 'http://example.com',
    ],
    [
    'name' => 'The C Programming Language',
    'author' => 'Brian W. Kernighan and Dennis M. Ritchie',
    'releaseYear' => '1978',
    'purchaseUrl' => 'http://example.com',
    ],
    [
    'name' => 'The C++ Programming Language',
    'author' => 'Bjarne Stroustrup',
    'releaseYear' => '1980',
    'purchaseUrl' => 'http://example.com',
    ],
    [
    'name' => 'The C# Programming Language',
    'author' => 'Jon Skeet',
    'releaseYear' => '2000',
    'purchaseUrl' => 'http://example.com',
    ],
];


    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] <= '1980';
    });

    require 'index.view.php';
