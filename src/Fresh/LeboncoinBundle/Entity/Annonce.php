<?php

namespace Fresh\LeboncoinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="Fresh\LeboncoinBundle\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="typeannonce", type="string")
     */
    private $typeannonce;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string")
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="dep", type="string")
     */
    private $dep;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


    /**
    * @ORM\ManyToMany(targetEntity="Fresh\LeboncoinBundle\Entity\Cathegorie",cascade={"persist"})
    */
    private $category_id;

    /**
    * @ORM\ManyToOne(targetEntity="Fresh\LeboncoinBundle\Entity\Annonceur",cascade={"persist"})
    */
    private $annonceur;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category_id = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Annonce
     */
    public function setDate()
    {
        $this->date = new \DateTime();

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
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

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set typeannonce
     *
     * @param string $typeannonce
     *
     * @return Annonce
     */
    public function setTypeannonce($typeannonce)
    {
        $this->typeannonce = $typeannonce;

        return $this;
    }

    /**
     * Get typeannonce
     *
     * @return string
     */
    public function getTypeannonce()
    {
        return $this->typeannonce;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Annonce
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
     * Set dep
     *
     * @param string $dep
     *
     * @return Annonce
     */
    public function setDep($dep)
    {
        $this->dep = $dep;

        return $this;
    }

    /**
     * Get dep
     *
     * @return string
     */
    public function getDep()
    {
        return $this->dep;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Annonce
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Annonce
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }




    /**
     * Add categoryId
     *
     * @param \Fresh\LeboncoinBundle\Entity\Cathegorie $categoryId
     *
     * @return Annonce
     */
    public function addCategoryId(\Fresh\LeboncoinBundle\Entity\Cathegorie $categoryId)
    {
        $this->category_id[] = $categoryId;

        return $this;
    }

    /**
     * Remove categoryId
     *
     * @param \Fresh\LeboncoinBundle\Entity\Cathegorie $categoryId
     */
    public function removeCategoryId(\Fresh\LeboncoinBundle\Entity\Cathegorie $categoryId)
    {
        $this->category_id->removeElement($categoryId);
    }

    /**
     * Get categoryId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set annonceur
     *
     * @param \Fresh\LeboncoinBundle\Entity\Annonceur $annonceur
     *
     * @return Annonce
     */
    public function setAnnonceur(\Fresh\LeboncoinBundle\Entity\Annonceur $annonceur = null)
    {
        $this->annonceur = $annonceur;

        return $this;
    }

    /**
     * Get annonceur
     *
     * @return \Fresh\LeboncoinBundle\Entity\Annonceur
     */
    public function getAnnonceur()
    {
        return $this->annonceur;
    }


    public $file;
}
