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
     * @ORM\Column(type="string")
     */
    protected $addresse;

    public function __construct()
    {
        parent::__construct();
    }
/**
     * @ORM\Column(type="string")
     */
protected $nom;

protected $pseudo;
protected $email;
protected $password;
protected $ville;
protected $region;
protected $codepostal;
protected $ratioheure;

protected $compteactif;
protected $telephone;
protected $choix_tel;
protected $img;
    /**
     * Set addresse
     *
     * @param string $addresse
     *
     * @return User
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get addresse
     *
     * @return string
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
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
     * Set region
     *
     * @param string $region
     *
     * @return User
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     *
     * @return User
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ratioheure
     *
     * @param integer $ratioheure
     *
     * @return User
     */
    public function setRatioheure($ratioheure)
    {
        $this->ratioheure = $ratioheure;

        return $this;
    }

    /**
     * Get ratioheure
     *
     * @return integer
     */
    public function getRatioheure()
    {
        return $this->ratioheure;
    }

    /**
     * Set compteactif
     *
     * @param integer $compteactif
     *
     * @return User
     */
    public function setCompteactif($compteactif)
    {
        $this->compteactif = $compteactif;

        return $this;
    }

    /**
     * Get compteactif
     *
     * @return integer
     */
    public function getCompteactif()
    {
        return $this->compteactif;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set choixTel
     *
     * @param integer $choixTel
     *
     * @return User
     */
    public function setChoixTel($choixTel)
    {
        $this->choix_tel = $choixTel;

        return $this;
    }

    /**
     * Get choixTel
     *
     * @return integer
     */
    public function getChoixTel()
    {
        return $this->choix_tel;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return User
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }
}
