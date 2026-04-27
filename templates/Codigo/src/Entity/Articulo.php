<?php

namespace App\Entity;

use App\Repository\ArticuloRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticuloRepository::class)]
class Articulo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $precio = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 8, scale: 3)]
    private ?string $peso = null;

    #[ORM\Column(type: Types::INTEGER, options: ['default' => 0])]
    private int $stock = 0;

    #[ORM\Column(type: Types::INTEGER, options: ['default' => 0])]
    private int $cantidad = 0;

    #[ORM\ManyToOne(targetEntity: Categoria::class, inversedBy: 'articulos')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?Categoria $categoria = null;

    #[ORM\ManyToOne(targetEntity: Proveedor::class, inversedBy: 'articulos')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?Proveedor $proveedor = null;

    #[ORM\ManyToOne(targetEntity: UbicacionAlmacen::class, inversedBy: 'articulos')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?UbicacionAlmacen $ubicacion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function getPrecio(): ?string
    {
        return $this->precio;
    }

    public function setPrecio(string $precio): static
    {
        $this->precio = $precio;
        return $this;
    }

    public function getPeso(): ?string
    {
        return $this->peso;
    }

    public function setPeso(string $peso): static
    {
        $this->peso = $peso;
        return $this;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;
        return $this;
    }

    public function getProveedor(): ?Proveedor
    {
        return $this->proveedor;
    }

    public function setProveedor(?Proveedor $proveedor): static
    {
        $this->proveedor = $proveedor;
        return $this;
    }

    public function getUbicacion(): ?UbicacionAlmacen
    {
        return $this->ubicacion;
    }

    public function setUbicacion(?UbicacionAlmacen $ubicacion): static
    {
        $this->ubicacion = $ubicacion;
        return $this;
    }

    public function getCantidad(): int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): static
    {
        $this->cantidad = $cantidad;
        return $this;
    }

    public function getCategoria(): ?Categoria
    {
        return $this->categoria;
    }

    public function setCategoria(?Categoria $categoria): static
    {
        $this->categoria = $categoria;
        return $this;
    }
}
