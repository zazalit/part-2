<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $storageCapacity;
    private $loading = 0;
    private $energy;


    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }


    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }


    public function getloading(): int
    {
        return $this->loading;
    }
    public function setloading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function loading () :string
    {
        if($this->loading < $this->storageCapacity) {
            $sentence = 'In filling ! ';
        }
        elseif
        ($this->loading > $this->storageCapacity) {
            $sentence = 'Full !';
        }
        return $sentence;
    }

}