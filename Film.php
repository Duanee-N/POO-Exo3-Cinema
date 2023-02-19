<?php

class Film{
    protected $realisateur;
    private $titre;
    private $dateSortie;
    private $duree;
    private $genre;
    private $synopsis;
    private array $castings;

    public function __construct($realisateur, $titre, $dateSortie, $duree, $genre, $synopsis)
    {
        $this->realisateur= $realisateur;
        $this->titre= $titre;
        $this->dateSortie = $dateSortie;
        $this->duree= $duree;
        $this->genre= $genre;
        $this->synopsis= $synopsis;
        $this->realisateur->ajouterFilm($this);
        $this->genre->ajouterFilm($this);
        $this->castings = [];
    }

    
    public function ajouterCasting(Casting $casting)
    {
        $this->castings[] = $casting;
    }
    
    public function __toString()
    {
        return "$this->titre ($this->dateSortie)";
    }

    public function afficherCasting()
    {
        echo "Dans le film <b>$this</b> : <br> <ul>";
        foreach ($this->castings as $casting) {
            echo "<li>$casting </li>";
        }
        echo "</ul>";
    }

    public function infosFilm()
    {
        echo "<b> Informations du film $this </b> <br>
        Réalisateur : $this->realisateur <br>
        Durée : $this->duree <br>
        Genre : $this->genre <br>
        Synopsis : $this->synopsis <br>
        Casting : <br>";
        foreach ($this->castings as $casting){
            echo "- $casting <br>";
        }
        echo "<br><br>";
    }
    
}

?>