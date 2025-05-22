<?php

namespace Application\Entity;

use Doctrine\Common\Collections\Expr\Value;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;


#[Entity, Table(name: 'generos')]
class genero {
    #[Id, Column(type: 'integer'), GeneratedValue(strategy: 'AUTO')]
    private int $id;
    #[Column(type: 'string', nullable: false)]
    private string $nome;

    public function getId() : int {
        return $this->id;
    }
    public function setId(int $id) : void {
        $this->id = $id;
    }
    public function getNome() : string {
        return $this->nome;
    }
    public function setNome(string $nome) : void {
        $this->nome = $nome;
    }
}