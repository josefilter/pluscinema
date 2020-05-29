<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ComentarioRepository")
 */
class Comentario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="text")
     */
    private $texto;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Serie", inversedBy="comentarios")
     */
    private $Serie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pelicula", inversedBy="comentarios")
     */
    private $Pelicula;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="comentarios")
     */
    private $Autor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexto(): ?string
    {
        return $this->texto;
    }

    public function setTexto(string $texto): self
    {
        $this->texto = $texto;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

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

    public function getPelicula(): ?Pelicula
    {
        return $this->Pelicula;
    }

    public function setPelicula(?Pelicula $Pelicula): self
    {
        $this->Pelicula = $Pelicula;

        return $this;
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
}
