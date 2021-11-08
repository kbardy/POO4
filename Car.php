<?php

class Car{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeets;
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = false;


    public function __construct(string $color, int $nbSeets, string $energy)
    {
        $this->nbWheels = 4;
        $this->currentSpeed = 0;
        $this->color = $color;
        $this->nbSeets = $nbSeets;
        $this->energy = $energy;
        $this->energyLevel = 0;
    }

    public function forward(): string{
        if($this->currentSpeed > 0){
            $this->currentSpeed += 15;
            return "Pushed the shroomy !";
        } else {
            return "start the car first !";
        }
    }

    public function brake(): string{
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('i cant forward, brake is on');
        } else {
            return 'Brake is OFF. Let\' Go';
        }
    }
   
    public function setParkBrake()
    {
        if ($this->hasParkBrake === true) {
            $this->hasParkBrake = false;
            return $this->start();
        } elseif ($this->hasParkBrake === false) {
            return "Brake is ON \n";
        }
        return $this;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeets(): int
    {
        return $this->nbSeets;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
}