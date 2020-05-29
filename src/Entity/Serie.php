<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SerieRepository")
 */
class Serie
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
     * @ORM\Column(type="integer")
     */
    private $Temporadas;

    /**
     * @ORM\Column(type="integer")
     */
    private $Capitulos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Genero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Actores;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comentario", mappedBy="Serie")
     */
    private $comentarios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Valoracion", mappedBy="Serie")
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

    public function getTemporadas(): ?int
    {
        return $this->Temporadas;
    }

    public function setTemporadas(int $Temporadas): self
    {
        $this->Temporadas = $Temporadas;

        return $this;
    }

    public function getCapitulos(): ?int
    {
        return $this->Capitulos;
    }

    public function setCapitulos(int $Capitulos): self
    {
        $this->Capitulos = $Capitulos;

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

    public function getActores(): ?string
    {
        return $this->Actores;
    }

    public function setActores(string $Actores): self
    {
        $this->Actores = $Actores;

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
            $comentario->setSerie($this);
        }

        return $this;
    }

    public function removeComentario(Comentario $comentario): self
    {
        if ($this->comentarios->contains($comentario)) {
            $this->comentarios->removeElement($comentario);
            // set the owning side to null (unless already changed)
            if ($comentario->getSerie() === $this) {
                $comentario->setSerie(null);
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
            $valoracion->setSerie($this);
        }

        return $this;
    }

    public function removeValoracion(Valoracion $valoracion): self
    {
        if ($this->valoracions->contains($valoracion)) {
            $this->valoracions->removeElement($valoracion);
            // set the owning side to null (unless already changed)
            if ($valoracion->getSerie() === $this) {
                $valoracion->setSerie(null);
            }
        }

        return $this;
    }
}
