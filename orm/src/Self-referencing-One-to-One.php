<?php

// http://doctrine-orm.readthedocs.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#one-to-one-self-referencing

/**
 *  @Entity
 */
class Estudante {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @OneToOne(targetEntity="Estudante")
     * @JoinColumn(name="mentor_id", referencedColumnName="id")
     */
    private $mentor;

    public function getMentor() {
        return $this->mentor;
    }

    public function setMentor($mentor) {
        $this->mentor = $mentor;
    }
}
