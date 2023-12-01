<?php

namespace App\Entity;

use App\Repository\FuelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FuelRepository::class)]
class Fuel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_fuel = null;

    #[ORM\Column(length: 255)]
    private ?string $fuel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFuel(): ?int
    {
        return $this->id_fuel;
    }

    public function setIdFuel(int $id_fuel): static
    {
        $this->id_fuel = $id_fuel;

        return $this;
    }

    public function getFuel(): ?string
    {
        return $this->fuel;
    }

    public function setFuel(string $fuel): static
    {
        $this->fuel = $fuel;

        return $this;
    }
}
