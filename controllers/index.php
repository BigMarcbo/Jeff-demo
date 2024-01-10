

<?php 


$books = [
	[
		'name' => 'Do Androids Dream of Electric Sheep',
		'author' => 'Philip K. Dick', 
		'purchaseUrl' => 'google.com',
		'releaseYear' => '1999'
	],

	[
		'name' => 'Project Hail Mary',
		'author' => 'Andy Weir',
		'purchaseUrl' => 'google.com',
		'releaseYear' => '1989'
	],

	[
		'name' => 'The Martian',
		'author' => 'Andy Weir',
		'purchaseUrl' => 'google.com',
		'releaseYear' => '2011'
	],
];



$filteredBooks = array_filter($books, function ($book) {
	return $book['author'] === 'Andy Weir';
});

$heading = 'Home';




require "views/index.view.php";

	