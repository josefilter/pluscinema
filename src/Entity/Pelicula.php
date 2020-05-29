<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PeliculaRepository")
 */
class Pelicula
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titulo;

    /**
     * @ORM\Column(type="text")
     */
    private $Resumen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Director;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Actores;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Escritores;

    /**
     * @ORM\Column(type="integer")
     */
    private $Duracion;

    /**
     * @ORM\Column(type="integer")
     */
    private $Edad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Genero;

    /**
     * @ORM\Column(type="date")
     */
    private $Fecha_salida;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comentario", mappedBy="Pelicula")
     */
    private $comentarios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Valoracion", mappedBy="Pelicula")
     */
    private $valoracions;

    public function __construct()
    {
        $this->comentarios = new ArrayCollection();
        $this->valoracions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->Titulo;
    }

    public function setTitulo(string $Titulo): self
    {
        $this->Titulo = $Titulo;

        return $this;
    }

    public function getResumen(): ?string
    {
        return $this->Resumen;
    }

    public function setResumen(string $Resumen): self
    {
        $this->Resumen = $Resumen;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->Director;
    }

    public function setDirector(string $Director): self
    {
        $this->Director = $Director;

        return $this;
    }

    public function getActores(): ?string
    {
        return $this->Actores;
    }

    public function setActores(string $Actores): self
    {
        $this->Actores = $Actores;

        return $this;
    }

    public function getEscritores(): ?string
    {
        return $this->Escritores;
    }

    public function setEscritores(string $Escritores): self
    {
        $this->Escritores = $Escritores;

        return $this;
    }

    public function getDuracion(): ?int
    {
        return $this->Duracion;
    }

    public function setDuracion(int $Duracion): self
    {
        $this->Duracion = $Duracion;

        return $this;
    }

    public function getEdad(): ?int
    {
        return $this->Edad;
    }

    public function setEdad(int $Edad): self
    {
        $this->Edad = $Edad;

        return $this;
    }

    public function getGenero(): ?string
    {
        return $this->Genero;
    }

    public function setGenero(string $Genero): self
    {
        $this->Genero = $Genero;

        return $this;
    }

    public function getFechaSalida(): ?\DateTimeInterface
    {
        return $this->Fecha_salida;
    }

    public function setFechaSalida(\DateTimeInterface $Fecha_salida): self
    {
        $this->Fecha_salida = $Fecha_salida;

        return $this;
    }

    /**
     * @return Collection|Comentario[]
     */
    public function getComentarios(): Collection
    {
        return $this->comentarios;
    }

    public function addComentario(Comentario $comentario): self
    {
        if (!$this->comentarios->contains($comentario)) {
            $this->comentarios[] = $comentario;
            $comentario->setPelicula($this);
        }

        return $this;
    }

    public function removeComentario(Comentario $comentario): self
    {
        if ($this->comentarios->contains($comentario)) {
            $this->comentarios->removeElement($comentario);
            // set the owning side to null (unless already changed)
            if ($comentario->getPelicula() === $this) {
                $comentario->setPelicula(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Valoracion[]
     */
    public function getValoracions(): Collection
    {
        return $this->valoracions;
    }

    public function addValoracion(Valoracion $valoracion): self
    {
        if (!$this->valoracions->contains($valoracion)) {
            $this->valoracions[] = $valoracion;
            $valoracion->setPelicula($this);
        }

        return $this;
    }

    public function removeValoracion(Valoracion $valoracion): self
    {
        if ($this->valoracions->contains($valoracion)) {
            $this->valoracions->removeElement($valoracion);
            // set the owning side to null (unless already changed)
            if ($valoracion->getPelicula() === $this) {
                $valoracion->setPelicula(null);
            }
        }

        return $this;
    }
}
