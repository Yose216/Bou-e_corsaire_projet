<?php
// src/AppBundle/Entity/Services.php
namespace AppBundle\Entity;

class Service 
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
    protected $title;
    /**
     * @ORM\Column(type="integer")
     */
    protected $level;
    /**
     * @ORM\Column(type="integer")
     */
    protected $categorie;
    /**
     * @ORM\Column(type="integer")
     */
    protected $statut;
    
    public function setTitle($title)
    {
        $this->title = $title;
        return $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setLevel($title)
    {
        $this->level = $level;
        return $level;
    }
    public function getLevel()
    {
        return $this->level;
    }
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
        return $categorie;
    }
    public function getCategorie()
    {
        return $this->categorie;
    }
    public function setTitle($statut)
    {
        $this->statut = $statut;
        return $statut;
    }
    public function getTitle()
    {
        return $this->title;
    }
}
