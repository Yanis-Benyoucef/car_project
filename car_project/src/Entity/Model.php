<?php

namespace App\Entity;

use App\Repository\ModelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModelRepository::class)]
class Model
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_model = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column]
    private ?int $brand = null;

    #[ORM\Column]
    private ?int $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdModel(): ?int
    {
        return $this->id_model;
    }

    public function setIdModel(int $id_model): static
    {
        $this->id_model = $id_model;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getBrand(): ?int
    {
        return $this->brand;
    }

    public function setBrand(int $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(int $category): static
    {
        $this->category = $category;

        return $this;
    }
}
