<?php

namespace Tutoriel;

class Personnage {

    /* Propriétés:
        public = accessible partout
        private = accessible uniquement dans la classe
        protected = accessible uniquement dans la classe et les classes héritées
    */

    const MAX_VIE = 120;

    protected $vie = 80;

    protected $atk = 20;

    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getVie()
    {
        return $this->vie;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function regenerer($vie = null)
    {
        if (is_null($vie)) {
            $this->vie = self::MAX_VIE;
        }
        $this->vie += $vie;
    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    protected function empecherNegatif()
    {
        if ($this->vie < 0) {
            $this->vie = 0;
        }
    }

    public function attaque($cible)
    {
        $cible->vie -= $this->atk;
        $cible->empecherNegatif();
    }
    //$this est l'attaquant
    //$cible est la cible ou le défenseur

}