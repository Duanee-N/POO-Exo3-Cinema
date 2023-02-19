<?php 

class Genre{

    protected string $nomGenre;
    protected array $films;

    public function __construct($nomGenre)
    {
        $this->nomGenre = $nomGenre;
        $this->films=[];
    }

    public function ajouterFilm(Film $film) 
    { 
        $this->films[] = $film; 
    }

    public function __toString()
    {
        return $this->nomGenre;
    }

    public function afficherGenre()
    {
        echo "<b>$this</b><br>";
        foreach($this->films as $film){
            echo "<ul><li>$film</li></ul>";
        }
    }
}

?>