<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="role")
 */
class Role
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

     /** 
     * @ORM\Column(type="string") 
     */
    private $nom;

    /**
     * Many Roles have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $user;


    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }

    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user=$user;
    }
}
?>