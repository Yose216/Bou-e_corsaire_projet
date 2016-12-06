<?php
// src/AppBundle/Entity/Besoins
class Besoin
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
     * @ORM\Column(type="string")
     */
    protected $description;
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
    public function setDescription($description)
    {
        $this->description = $description;
        return $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setLevel($level)
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
    public function setStatut($statut)
    {
        $this->statut = $statut;
        return $statut;
    }
    public function getStatut()
    {
        return $this->statut;
    }
}
