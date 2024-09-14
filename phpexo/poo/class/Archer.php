<?php

namespace Tutoriel;

class Archer extends Personnage  {   // extends = hérite de la classe Personnage, c'est à dire qu'il a accès à toutes les propriétés et méthodes de la classe Personnage

    public function __construct($nom)
    {
        $this->vie = $this->vie / 2;   // On divise la vie par 2
        parent::__construct($nom);   // On appelle le constructeur de la classe parente
    }

    public function attaque($cible)
    {
        $cible->vie -= $this->atk;
        parent::attaque($cible);
    }

}