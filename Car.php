<?php

class Car{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeets;
    private string $energy;
    private int $energyLevel;

    /**Ainsi que les méthodes suivantes :

    Le constructeur avec la couleur, le nombre de sièges et le  d'énergie comme paramètres.
    Démarrer;
    Avancer;
    Freiner;
    Les accesseurs des propriétés.
 */
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

    public function start(): string{
        $this->currentSpeed = 1;
        return "Here we go!";
    }

    /**
     * Get the value of nbWheels
     */ 
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * Get the value of energyLevel
     */ 
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Get the value of nbSeets
     */ 
    public function getNbSeets(): int
    {
        return $this->nbSeets;
    }

    /**
     * Get the value of energy
     */ 
    public function getEnergy(): string
    {
        return $this->energy;
    }
}