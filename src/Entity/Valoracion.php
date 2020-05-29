<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ValoracionRepository")
 */
class Valoracion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="valoracions")
     */
    private $Autor;

    /**
     * @ORM\Column(type="date")
     */
    private $Fecha;

    /**
     * @ORM\Column(type="integer")
     * @Assert\GreaterThanOrEqual(0)
     * @Assert\LessThanOrEqual(10)
     */
    private $Valoracion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pelicula", inversedBy="valoracions")
     */
    private $Pelicula;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Serie", inversedBy="valoracions")
     */
    private $Serie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAutor(): ?User
    {
        return $this->Autor;
    }

    public function setAutor(?User $Autor): self
    {
        $this->Autor = $Autor;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->Fecha;
    }

    public function setFecha(\DateTimeInterface $Fecha): self
    {
        $this->Fecha = $Fecha;

        return $this;
    }

    public function getValoracion(): ?int
    {
        return $this->Valoracion;
    }

    public function setValoracion(int $Valoracion): self
    {
        $this->Valoracion = $Valoracion;

        return $this;
    }

    public function getPelicula(): ?Pelicula
    {
        return $this->Pelicula;
    }

    public function setPelicula(?Pelicula $Pelicula): self
    {
        $this->Pelicula = $Pelicula;

        return $this;
    }

    public function getSerie(): ?Serie
    {
        return $this->Serie;
    }

    public function setSerie(?Serie $Serie): self
    {
        $this->Serie = $Serie;

        return $this;
    }
}
