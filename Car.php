<?php
include "./Vehicule.php";
class Car extends Vehicule{
    private string $marque;

    /**
     * Constructor
     */
    function __construct(string $m, float $poid){
        parent::__construct($poid);
        $this->marque = $m;
    }

    function __toString()
    {
        return "Marque : ".$this->marque." Poids: ".$this->weight;;
    }

    function displayWeight()
    {
        echo "Car of $this->weight Tonnes";
    }
}