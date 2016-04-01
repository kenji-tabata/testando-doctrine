<?php

// http://doctrine-orm.readthedocs.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#many-to-many-bidirectional

/**
 *  @Entity 
 */
class Professor {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ManyToMany(targetEntity="Sala", inversedBy="professores")
     * @JoinTable(name="professores_sala")
     */
    private $salas;

    public function getSala() {
        return $this->salas;
    }

    public function setSala($salas) {
        $this->salas = $salas;
    }

    public function __construct() {
        $this->salas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}

/**
 *  @Entity
 */
class Sala {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;
    
    /**
     * @ManyToMany(targetEntity="Professor", mappedBy="salas")
     */
    private $professores;

    public function getId() {
        return $this->id;
    }
    
    public function getProfessor() {
        return $this->salas;
    }

    public function setProfessor($professores) {
        $this->professores = $professores;
    }
    
    public function __construct() {
        $this->professores = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
