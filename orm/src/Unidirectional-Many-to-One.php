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
     * @Column(type="string")
     * @var string
     */
    protected $nome;

    /**
     * @ManyToOne(targetEntity="OndeMora")
     * @JoinColumn(name="OndeMora_id", referencedColumnName="id")
     */
    private $ondeMora;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getOndeMora() {
        return $this->ondeMora;
    }

    public function setOndeMora($ondeMora) {
        $this->ondeMora = $ondeMora;
    }

}

/**
 * @Entity
 */
class OndeMora {

    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $endereco;

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
