<?php

class Movie{
  public $director;
  public $movieTitle;
  public $rating;
  }


$movies = array();

for ($i =0; $i < 10; $i++){
  $movie = new Movie();
  $movie->title = "title $i";
  $movie -> rating = "rating $i";
  $movie -> director ="director $i";
  
  $movies[] = $movie;
}
/* Set the header tzpe for output */
header ('Content-Type: application/json');
/* Create a variable to hold zour JSON data*/
$jsonOutput = json_encode($movies);
/* Output the JSON data */
echo $jsonOutput;
