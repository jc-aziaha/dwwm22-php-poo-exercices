<?php

    class Person {
        private ?string $firstName     = null;
        private ?string $lastName      = null;
        private ?string $favoriteMeal  = null;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal)
        {
            $this->firstName    = $firstName;
            $this->lastName     = $lastName;
            $this->favoriteMeal = $favoriteMeal;
        }

        public function getFirstName(): string {
            return $this->firstName;
        }

        public function setFirstName(string $firstName): void {
            $this->firstName = $firstName;
        }

        public function getLastName(): string {
            return $this->lastName;
        }

        public function setLastName(string $lastName): void {
            $this->lastName = $lastName;
        }

        public function getFavoriteMeal(): string {
            return $this->favoriteMeal;
        }

        public function setFavoriteMeal(string $favoriteMeal): void {
            $this->favoriteMeal = $favoriteMeal;
        }

        public function presentation(): string {
            return "Je m'appelle {$this->firstName} {$this->lastName} et j'adore {$this->favoriteMeal}. <br>";
        }
    }

    $person1 = new Person("Riri", "Duck", "Lasagnes");
    $person2 = new Person("Fifi", "Duck", "Pâtes bolognaises");
    $person3 = new Person("Loulou", "Duck", "Pizza");

    echo $person1->presentation();
    echo $person2->presentation();
    echo $person3->presentation();


    // salaire += salary * ($percentage / 100);