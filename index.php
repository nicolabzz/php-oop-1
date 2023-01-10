<style>
  * {
    text-align: center;
    background-color: black;
  }

  li {
    color: chocolate;
    font-weight: bold;
    font-size: 15px;
    padding: .4rem;
  }

  li:first-child {
    color: goldenrod;
    font-size: 20px;
  }
</style>

<!--```````````````````
      vamos pablito
`````````````````````-->

<?php

class Movie
{

  public $title;
  public $duration;
  public $year;
  public $rate;

  public function __construct($title, $duration, $year, $rate)
  {
    $this->title = $title;
    $this->duration = $duration;
    $this->rate = $year;
    $this->rate = $rate;
  }

  function setTitle($title)
  {
    $this->title = $title;
  }

  function setDuration($duration)
  {
    $this->duration = $duration . " minutes";
  }

  function setYear($year)
  {
    $this->year = $year;
  }

  function setRate($rate)
  {
    $this->rate = $rate;
  }

  function getTitle()
  {
    return $this->title;
  }

  function getDuration()
  {
    return $this->duration;
  }

  function getYear()
  {
    return $this->year;
  }

  function getRate()
  {
    return $this->rate;
  }
}

$inception = new Movie('Inception', '2h 28m', '2010', '4.2/5');
$the_wolf_of_wall_street = new Movie('The Wolf of Wall Street', '3h', '2013', '4.2/5');
$la_citta_incantata = new Movie('La citta incantata', '2h 05m', '2001', '4.4/5');

$movies = [];
array_push($movies, new Movie('Inception', '2h 28m', '2010', '4.2/5'));
array_push($movies, new Movie('The Wolf of Wall Street', '3h', '2013', '4.2/5'));
array_push($movies, new Movie('La citta incantata', '2h 05m', '2001', '4.4/5'));

foreach ($movies as $movie) {
  echo '<ul style="list-style-type: none">';
  echo '<li>Title: ' . $movie->getTitle() . '</li>';
  echo '<li>Duration: ' . $movie->getDuration() . '</li>';
  echo '<li>Year: ' . $movie->getYear() . '</li>';
  echo '<li>Rate: ' . $movie->getRate() . '</li>';
  echo '</ul>';
}