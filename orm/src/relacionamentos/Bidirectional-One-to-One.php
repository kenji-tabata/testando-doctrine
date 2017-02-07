<?php

// http://doctrine-orm.readthedocs.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#one-to-one-bidirectional

/**
 *  @Entity
 */
class Cliente {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @OneToOne(targetEntity="Carrinho", mappedBy="cliente")
     */
    private $carrinho;


    public function getCarrinho() {
        return $this->carrinho;
    }

    public function setCarrinho($carrinho) {
        $this->carrinho = $carrinho;
    }
}

/**
 *  @Entity
 */
class Carrinho {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @OneToOne(targetEntity="Cliente", inversedBy="carrinho")
     * @JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $cliente;

    public function getId() {
        return $this->id;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }
}
