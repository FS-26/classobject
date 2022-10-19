<?php 

class Vehicule{
    protected float $weight;

    function __construct( float $weight)
    {
        $this->weight = $weight;
    }

    function displayWeight(){
        echo "I am a Vehicle of $this->weight Tonne";
    }
}