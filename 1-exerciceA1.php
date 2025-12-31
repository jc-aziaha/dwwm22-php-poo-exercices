<?php

    class Person {
        public ?string $firstName     = null;
        public ?string $lastName      = null;
        public ?string $favoriteMeal  = null;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal)
        {
            $this->firstName    = $firstName;
            $this->lastName     = $lastName;
            $this->favoriteMeal = $favoriteMeal;
        }
    }

    $person1 = new Person("Riri", "Duck", "Lasagnes");
    $person2 = new Person("Fifi", "Duck", "Pâtes bolognaises");
    $person3 = new Person("Loulou", "Duck", "Pizza");

    echo "{$person1->firstName} {$person1->lastName} adore {$person1->favoriteMeal}. <br>";
    echo "{$person2->firstName} {$person2->lastName} adore {$person2->favoriteMeal}. <br>";
    echo "{$person3->firstName} {$person3->lastName} adore {$person3->favoriteMeal}. <br>";