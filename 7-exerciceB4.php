<?php

    interface Animal {
        public function crier(): string;
    }

    class Chien implements Animal {
        public function crier(): string {
            return "Le chien crie";
        }
    }

    class Chat implements Animal {
        public function crier(): string {
            return "Le chat crie";
        }
    }


    function faireCrier(Animal $animal): string {
        return $animal->crier();
    }

    $chien = new Chien();
    echo faireCrier($chien);

    echo "\n";

    $chat = new Chat();
    echo faireCrier($chat);