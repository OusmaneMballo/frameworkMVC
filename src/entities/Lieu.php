<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="lieu")
 */
class Lieu
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
     * @ORM\Column(type="decimal") 
     */
    private $laltitude;

    /** 
     * @ORM\Column(type="decimal") 
     */
    private $logitude;

    /**
     * One lieu has many formations. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Formation", mappedBy="lieu")
     */
    private $formations;

     /**
     * Many lieu have one user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="lieux")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    public function __construct()
    {
        $this->formations = new ArrayCollection();
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

    public function getLatitude()
    {
        return $this->laltitude;
    }
    public function setLatitude($laltitude)
    {
        $this->laltitude=$laltitude;
    }

    public function getLogitude()
    {
        return $this->logitude;
    }
    public function setLogitude($logitude)
    {
        $this->logitude=$logitude;
    }

    public function getFormation()
    {
        return $this->formations;
    }
    public function setFormation($formations)
    {
        $this->formations=$formations;
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