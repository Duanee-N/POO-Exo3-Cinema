<?php

class Personne{
    protected $nom;
    protected $sexe;
    protected $naissance;

    protected array $films;


    public function __construct($nom, $sexe, $naissance)
    {
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->naissance = new DateTime($naissance);
        $this->films=[];
    }

    public function ajouterFilm(Film $film) 
    { 
        $this->films[] = $film; 
    }

    public function __toString()
    {
        return "$this->nom";
    }
    public function infos()
    {
        echo "<b>Informations de $this : </b> <br>
        Nom : $this <br>
        Date de naissance : ".$this->naissance->format('d-m-Y')."<br>
        Sexe: $this->sexe <br><br>
        <b>Filmographie de $this : </b> <br> <ul>";
        foreach($this->films as $film){
            echo "<li>$film</li>";
        }
        echo "</ul><br>";
    }
}

?>