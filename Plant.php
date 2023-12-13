<?php

class Plant
{
    private $name;
    private $latinName;
    private $isAnnual;
    private $growingRegion;
    private $height;
    private $isEdible;

    public function __construct(
        $name = "", 
        $latinName = "", 
        $isAnnual = false, 
        $growingRegion = "",
        $height = 0,
        $isEdible = false)
    {
        $this->name = $name;
        $this->latinName = $latinName;
        $this->isAnnual = $isAnnual;
        $this->growingRegion = $growingRegion;
        $this->height = $height;
        $this->isEdible = $isEdible;
    }

    public function getName(){
        return $this->name;
    }

    public function getLatinName(){
        return $this->latinName;
    }

    public function isAnnual(){
        return $this->isAnnual;
    }

    public function getGrowingRegion(){
        return $this->growingRegion;
    }

    public function getHeight(){
        return $this->height;
    }

    public function isEdible(){
        return $this->isEdible;
    }
}

?>

<!-- 2.Sukurti klasę Plant
Visi laukai turi būti private, turėti getterius ir setterius. 
konstruktorius su optional parameters -->