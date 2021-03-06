<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    public $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    public $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    public $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    public $age;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer", nullable=true)
     */
    public $niveau;

    /**
     * @var int
     *
     * @ORM\Column(name="exp", type="integer", nullable=true)
     */
    public $exp;

    /**
     * @var int
     *
     * @ORM\Column(name="requireExp", type="integer", nullable=true)
     */
    public $requireExp;

    /**
     * @var int
     *
     * @ORM\Column(name="bestScore", type="integer", nullable=true)
     */
    public $bestScore;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     * @return User
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set exp
     *
     * @param integer $exp
     * @return User
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return integer 
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set requireExp
     *
     * @param integer $requireExp
     * @return User
     */
    public function setRequireExp($requireExp)
    {
        $this->requireExp = $requireExp;

        return $this;
    }

    /**
     * Get requireExp
     *
     * @return integer 
     */
    public function getRequireExp()
    {
        return $this->requireExp;
    }

    /**
     * Set bestScore
     *
     * @param integer $bestScore
     * @return User
     */
    public function setBestScore($bestScore)
    {
        $this->bestScore = $bestScore;

        return $this;
    }

    /**
     * Get bestScore
     *
     * @return integer 
     */
    public function getBestScore()
    {
        return $this->bestScore;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }
}
