<?php

    class Person {
        protected ?string $firstName     = null;
        protected ?string $lastName      = null;
        protected ?string $favoriteMeal  = null;

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

    class Employe extends Person {
        private ?float $salary = null;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal, float $salary)
        {
            parent::__construct($firstName, $lastName, $favoriteMeal);
            $this->salary = $salary;
        }

        public function getSalary(): float {
            return $this->salary;
        }

        public function setSalary(float $salary): void {
            $this->salary = $salary;
        }

        public function increaseSalary(float $percentage): void {
            $this->salary += $this->salary * ($percentage / 100);
        }

        public function presentation(): string
        {
            return "Je m'appelle {$this->firstName} {$this->lastName} et j'adore {$this->favoriteMeal} et je gagne {$this->salary} par mois.<br>";
        }
    }

    $employe = new Employe("Daisy", "Duck", "pain", 2500);
    $employe->increaseSalary(3.5);

    echo $employe->presentation();
    


