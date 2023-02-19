<?php

class Role{
    private string $role;

    private array $castings;

    public function __construct($role)
    {
        $this->role = $role;
        $this->castings = [];
    }

    public function ajouterCasting(Casting $casting)
    {
        $this->castings[] = $casting;
    }

    public function afficherCasting()
    {
        foreach ($this->castings as $casting) {
            echo $casting;
        }
    }

    public function __toString()
    {
        return $this->role;
    }

}

?>