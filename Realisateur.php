<?php

class Realisateur extends Personne{
    protected array $films;
    
    public function __construct($nom, $sexe, $naissance)
    {
        parent::__construct($nom, $sexe, $naissance); //récupère la fonction __construct du parent
    }

    public function infos()
    {
        echo "<b>Informations de $this (réalisateur/réalisatrice) : </b> <br>
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