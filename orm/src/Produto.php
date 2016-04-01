<?php

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#starting-with-the-product

/**
 * @Entity @Table(name="produtos")
 **/
class Produto {

    /**
     * @Id @Column(type="integer") @GeneratedValue
     **/
    protected $id;

    /**
     *  @Column(type="string")
     **/
    protected $nome;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->name;
    }

    public function setNome($nome) {
        $this->name = $nome;
    }
}
