<?php

// http://doctrine-orm.readthedocs.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#many-to-many-unidirectional

/** @Entity */
class Aluno {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ManyToMany(targetEntity="Grupo")
     * @JoinTable(name="aluno_grupo",
     *      joinColumns={@JoinColumn(name="aluno_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="grupo_id", referencedColumnName="id")}
     *      )
     */
    private $grupos;

    public function getGrupo() {
        return $this->grupos;
    }

    public function setGrupo($grupos) {
        $this->grupos = $grupos;
    }
    
    public function __construct() {
        $this->grupos = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

/** @Entity */
class Grupo {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;
    
    public function getId() {
        return $this->id;
    }
}
