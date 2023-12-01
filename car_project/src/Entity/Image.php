<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_image = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $image = null;

    #[ORM\Column]
    private ?int $id_vehicle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdImage(): ?int
    {
        return $this->id_image;
    }

    public function setIdImage(int $id_image): static
    {
        $this->id_image = $id_image;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

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
}
