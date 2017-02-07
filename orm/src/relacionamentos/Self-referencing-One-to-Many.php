<?php

// http://doctrine-orm.readthedocs.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#one-to-many-self-referencing

/**
 *  @Entity
 */
class Categoria {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @OneToMany(targetEntity="Categoria", mappedBy="parent")
     */
    private $children;

    /**
     * @ManyToOne(targetEntity="Categoria", inversedBy="children")
     * @JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

    public function getParent() {
        return $this->parent;
    }

    public function setParent($parent) {
        $this->parent = $parent;
    }

    public function __construct() {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
