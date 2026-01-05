<?php

    interface Nageur {
        public function nager(): string;
    }

    interface Voleur {
        public function voler(): string;
    }

    class SuperHero implements Nageur, Voleur {
        private ?string $name = null;
        
        public function nager(): string {
            return "Le superHero nage";
        }
        
        public function voler(): string {
            return "Le superHero vole";
        }
    }

    $superHero = new SuperHero();
    echo $superHero->nager();
    echo "\n";
    echo $superHero->voler();