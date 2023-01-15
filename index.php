<?php

include_once __DIR__ ."/classes/Movie.php";

$movie1= new Movie("Il signore degli anelli - ", "Il ritorno del Re", 2003 );
$movie2= new Movie("Beautiful Mind", null, 2001);
$movie3= new Movie("Star Wars  ", "L'ascesa di Skywalker", 2019);

var_dump($movie1);

echo "<br>". "<br>" . "Title:  " . $movie1->getTitle() . "<br>" . "Subtitle:  " . $movie1->getSubtitle(); 
echo "<br>" . "Year:  " . $movie1->getYear();

echo "<br>". "<br>" . "Title:  " . $movie2->getTitle() . "<br>" . "Year:  " . $movie2->getYear(); 

echo "<br>". "<br>" . "Title:  " . $movie3->getTitle() . "<br>" . "Subtitle:  " . $movie3->getSubtitle(); 
echo "<br>" . "Year:  " . $movie3->getYear();

echo "<br>". "<br>" . "Full Titles:  " . $movie1->getfullTitles();