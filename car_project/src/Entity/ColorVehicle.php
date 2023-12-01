<?php

namespace App\Entity;

use App\Repository\ColorVehicleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ColorVehicleRepository::class)]
class ColorVehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_color_vehicle = null;

    #[ORM\Column]
    private ?int $id_vehicle = null;

    #[ORM\Column]
    private ?int $id_color = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdColorVehicle(): ?int
    {
        return $this->id_color_vehicle;
    }

    public function setIdColorVehicle(int $id_color_vehicle): static
    {
        $this->id_color_vehicle = $id_color_vehicle;

        return $this;
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

    public function getIdColor(): ?int
    {
        return $this->id_color;
    }

    public function setIdColor(int $id_color): static
    {
        $this->id_color = $id_color;

        return $this;
    }
}
