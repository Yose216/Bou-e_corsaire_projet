<?php

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Besoin
 *
 * @ORM\Table(name="besoin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BesoinRepository")
 */
class Besoin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="heure", type="integer")
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=5000)
     */
    private $description;
	
	/**
	* @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="besoins")
   	* @ORM\JoinColumn(nullable=false)
   	*/
	private $user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Besoin
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Besoin
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set heure
     *
     * @param integer $heure
     *
     * @return Besoin
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return int
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Besoin
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Besoin
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
	
//	public function __construct()
//  {
//    $this->user = new ArrayCollection();
//  }

  public function addUser(User $user)
  {
    $this->user = $user;
	//return $this;
  }

  public function removeUser(User $user)
  {
    $this->user->removeElement($user);
  }

  public function getUser()
  {
    return $this->user;
  }
	
	
}

