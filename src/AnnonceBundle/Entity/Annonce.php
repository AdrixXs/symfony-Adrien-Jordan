<?php

namespace AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 */
class Annonce
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var int
     */
    private $id_vendeur;

    /**
     * @var string
     */
    private $description;


    /**
     * @var string
     */
    private $image;

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
     * Set title
     *
     * @param string $title
     * @return Annonce
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
     * Set vendeur
     *
     * @param string $vendeur
     * @return Annonce
     */
    public function setId_Vendeur($id_vendeur)
    {
        $this->id_vendeur = $id_vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return int
     */
    public function getId_Vendeur()
    {
        return $this->id_vendeur;
    }

    /**
     * Set description
     *
     * @param string $description
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
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}
