<?php

    abstract class Forme {
        abstract public function calculerSurface(): int|float;
    }

    class Cercle extends Forme {

        private null|int|float $rayon = null;

        public function __construct(int|float $rayon)
        {
            $this->rayon = $rayon;
        }

        // public function __construct(private null|int|float $rayon = null) {
        // }

        public function getRayon(): int|float {
            return $this->rayon;
        }

        public function setRayon(int|float $rayon): void {
            $this->rayon = $rayon;
        }

        public function calculerSurface(): int|float {
            return pi() * pow($this->rayon, 2);   
        }
    }

    class Rectangle extends Forme {

        private null|int|float $longueur = null;
        private null|int|float $largeur = null;

        public function __construct(int|float $longueur, int|float $largeur) {
            $this->longueur = $longueur;
            $this->largeur  = $largeur;
        }

        public function calculerSurface(): int|float {
            return $this->longueur * $this->largeur;
        }
    }

    $cercle = new Cercle(5);
    echo $cercle->calculerSurface();

    echo "<br>";

    $rectangle = new Rectangle(4, 2);
    echo $rectangle->calculerSurface();



