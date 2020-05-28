<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
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
     * @ORM\Column(type="string") 
     */
    private $prenom;

    /** 
     * @ORM\Column(type="string") 
     */
    private $email;

    /** 
     * @ORM\Column(type="string") 
     */
    private $passwd;

    /**
     * One lieu has many user. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Lieu", mappedBy="user")
     */
    private $lieux;

     /**
     * Many Users have Many roles.
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="user")
     * @ORM\JoinTable(name="users_role")
     */
    private $roles;

    public function __construct()
    {
        $this->lieux = new ArrayCollection();
        $this->roles = new ArrayCollection();
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

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom=$prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function getPasswd()
    {
        return $this->passwd;
    }
    public function setPasswd($passwd)
    {
        $this->passwd=$passwd;
    }

    public function getRole()
    {
        return $this->roles;
    }

    public function setRole($roles)
    {
        $this->roles=$roles;
    }

    public function getLieu()
    {
        return $this->lieux;
    }
    
    public function setLieu($lieux)
    {
        $this->lieux=$lieux;
    }
}
?>