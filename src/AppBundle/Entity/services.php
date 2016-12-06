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
    
}