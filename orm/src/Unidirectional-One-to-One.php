<?php

// http://doctrine-orm.readthedocs.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#one-to-one-unidirectional

/**
 * @Entity
 */
class Produto {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @OneToOne(targetEntity="Envio")
     * @JoinColumn(name="envio_id", referencedColumnName="id")
     */
    private $envio;

    public function getEnvio() {
        return $this->envio;
    }

    public function setEnvio($envio) {
        $this->envio = $envio;
    }
}

/**
 *  @Entity
 */
class Envio {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    public function getId() {
        return $this->id;
    }
}
