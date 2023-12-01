<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_vehicle = null;

    #[ORM\Column]
    private ?int $model = null;

    #[ORM\Column]
    private ?int $fuel_type = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descritpion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $year = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVehicle(): ?int
    {
        return $this->id_vehicle;
    }

    public function setIdVehicle(int $id_vehicle): static
    {
        $this->id_vehicle = $id_vehicle;

        return $this;
    }

    public function getModel(): ?int
    {
        return $this->model;
    }

    public function setModel(int $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getFuelType(): ?int
    {
        return $this->fuel_type;
    }

    public function setFuelType(int $fuel_type): static
    {
        $this->fuel_type = $fuel_type;

        return $this;
    }

    public function getDescritpion(): ?string
    {
        return $this->descritpion;
    }

    public function setDescritpion(string $descritpion): static
    {
        $this->descritpion = $descritpion;

        return $this;
    }

    public function getYear(): ?\DateTimeInterface
    {
        return $this->year;
    }

    public function setYear(\DateTimeInterface $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }
}
