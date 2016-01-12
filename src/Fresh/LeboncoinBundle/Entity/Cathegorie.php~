<?php

namespace Fresh\LeboncoinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cathegorie
 *
 * @ORM\Table(name="cathegorie")
 * @ORM\Entity(repositoryClass="Fresh\LeboncoinBundle\Repository\CathegorieRepository")
 */
class Cathegorie
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
     * @var string
     *
     * @ORM\Column(name="nom_cathegorie", type="string", length=255)
     */
    private $nomCathegorie;

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
     * Set nomCathegorie
     *
     * @param string $nomCathegorie
     *
     * @return Cathegorie
     */
    public function setNomCathegorie($nomCathegorie)
    {
        $this->nomCathegorie = $nomCathegorie;

        return $this;
    }

    /**
     * Get nomCathegorie
     *
     * @return string
     */
    public function getNomCathegorie()
    {
        return $this->nomCathegorie;
    }
}
