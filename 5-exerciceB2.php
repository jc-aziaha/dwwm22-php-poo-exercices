<?php

    interface Vehicule {
        public function demarrer();
        public function arreter();
    }

    class Voiture implements Vehicule {
        public function demarrer() {
            return "Le véhicule démarre";
        }
        public function arreter() {
            return "Le véhicule s'arrête";
        }
    }
    
    class Moto implements Vehicule {
        public function demarrer() {
            return "La moto démarre";
        }
        public function arreter() {
            return "La moto s'arrête";
        }
    }
