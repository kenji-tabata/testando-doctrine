<?php

/**
 *  @Entity 
 */
class Pessoa{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ManyToMany(targetEntity="Pessoa", mappedBy="myFriends")
     */
    private $amigosDosMeusAmigos;

    /**
     * @ManyToMany(targetEntity="Pessoa", inversedBy="amigosDosMeusAmigos")
     * @JoinTable(name="amigos",
     *      joinColumns={@JoinColumn(name="pessoa_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="amigo_amigo_id", referencedColumnName="id")}
     *      )
     */
    private $meusAmigos;

    public function __construct() {
        $this->amigosDosMeusAmigos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->meusAmigos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getAmigosDosMeusAmigos() {
        return $this->amigosDosMeusAmigos;
    }

    public function setAmigosDosMeusAmigos($amigosDosMeusAmigos) {
        $this->amigosDosMeusAmigos = $amigosDosMeusAmigos;
    }
    
    public function getMeusAmigos() {
        return $this->meusAmigos;
    }

    public function setMeusAmigos($meusAmigos) {
        $this->meusAmigos = $meusAmigos;
    }
}