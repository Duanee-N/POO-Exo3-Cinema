<?php

class Casting{
    private Film $film;
    private Acteur $acteur;
    private Role $role;

    public function __construct($film, $acteur, $role)
    {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $this->film->ajouterCasting($this);
        $this->acteur->ajouterCasting($this);
        $this->role->ajouterCasting($this);
    }

    public function __toString()
    {
        return "<b>$this->acteur</b> a incarné <b>$this->role</b>.";
    }

    public function afficherRole(){
        echo "Le rôle de <b>$this->role</b> a été incarné par <b>$this->acteur</b> dans le film <b>$this->film</b>. <br>";
    }
}

?>