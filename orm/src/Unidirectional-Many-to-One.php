<?php

// http://doctrine-orm.readthedocs.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#many-to-one-unidirectional

/**
 * @Entity
 */
class Usuario {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="Endereco")
     * @JoinColumn(name="endereco_id", referencedColumnName="id")
     */
    private $endereco;

    public function getId() {
        return $this->id;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}

/**
 * @Entity
 */
class Endereco {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    public function getId() {
        return $this->id;
    }
}
