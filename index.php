<h1>My Movies</h1>

<?php

class Movie {

    public $title;
    public $length;
    public $language;

    public function __construct($title, $length, $language) {

        $this -> title = $title;
        $this -> length = $length;
        $this -> language = $language;
    }

    public function movieDetails() {
        return "Title: " . $this->title . ", Length: " . $this->length . ", Language: " . $this->language;
    }
} 

$movie1 = new Movie("Ritorno al Futuro", "1.30 h", "Italiano");
$movie2 = new Movie("La Vita è Bella", "2.30 h", "Italiano");

echo $movie1->movieDetails();
echo "<br><br><br>";
echo $movie2->movieDetails();

?>
