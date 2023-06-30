<h1>My Movies</h1>

<?php

class Genres {

    public $genre1;
    public $genre2;
    public $genre3;

    public function __construct( $genre1, $genre2, $genre3) {
    
        $this -> genre1 = $genre1;
        $this -> genre2 = $genre2;
        $this -> genre3 = $genre3;
    }

    public function movieGenre() {
        return "Genre: " . $this->genre1 . ", " . $this->genre2 . ", " . $this->genre3;
    }
}

class Movie {

    public $title;
    public $length;
    public $language;
    public $genres; // Reference to Genres object

    public function __construct($title, $length, $language, Genres $genres) {

        $this -> title = $title;
        $this -> length = $length;
        $this -> language = $language;
        $this -> genres = $genres; // Store Genres object
    }

    public function movieDetails() {
        // Call movieGenre method on genres property
        return "Title: " . $this->title . ", Length: " . $this->length . ", Language: " . $this->language . ", " . $this->genres->movieGenre();
    }
} 

$genres1 = new Genres("Commedia", "Avventura", "Azione");
$movie1 = new Movie("Ritorno al Futuro", "1.30 h", "Italiano", $genres1);

$genres2 = new Genres("Drammatico", "Commedia", "Storico");
$movie2 = new Movie("La Vita è Bella", "2.30 h", "Italiano", $genres2);

echo $movie1->movieDetails();
echo "<br><br><br>";
echo $movie2->movieDetails();

?>
