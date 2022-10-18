<?php
class Person
{
    public string $lastName;
    public string $firstName;
    private int $age;
    public string $image;

    function __construct($lastName, $firstName, $age, $image)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
        $this->image = $image;
    }

    function displayInfo(){
        echo "<h2> nom: ". $this->lastName. " Prénom: ".$this->firstName. "</h2> <strong> Age: ".$this->age, "</strong>  <br> <img src='".$this->image."' />";

    }
}