<?php

class Acteur extends Personne{

    private Role $role;

    private array $castings;
    

    public function __construct($nom, $sexe, $naissance)
    {
        parent::__construct($nom, $sexe, $naissance); //récupère la fonction __construct du parent
        $this->castings = [];
    }

    public function ajouterCasting(Casting $casting)
    {
        $this->castings[] = $casting;
    }

    public function infosActeur()
    {
        echo "<b>Informations de $this (acteur/actrice) : </b> <br>
        Nom : $this <br>
        Date de naissance : ".$this->naissance->format('d-m-Y')."<br>
        Sexe: $this->sexe <br><br>
        <b>Filmographie de $this : </b> <br> <ul>";
        foreach($this->castings as $casting){
            echo "<li>$casting</li>";
        }
        echo "</ul><br>";
    }
}

?>