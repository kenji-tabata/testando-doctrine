<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 *  @Entity
 */
class Programa {

    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @OneToMany(targetEntity="Recurso", mappedBy="programa")
     */
    private $recursos;

    public function getRecurso() {
        return $this->recursos;
    }

    public function setRecurso($recursos) {
        $this->recursos = $recursos;
    }

    public function __construct() {
        $this->recursos = new ArrayCollection();
    }

}

/**
 *  @Entity
 */
class Recurso {

    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="Programa", inversedBy="recursos")
     * @JoinColumn(name="programa_id", referencedColumnName="id")
     */
    private $programa;

    public function getPrograma() {
        return $this->programa;
    }

    public function setPrograma($programa) {
        $this->programa = $programa;
    }
}
