<?php

namespace App\Export;

use App\Exceptions\AvailableException;
use App\Export\VenteInterface;

/**
 * Class Product
 * @author Boyer Julien
 * @version 1.0
 * @package App
 */
abstract class Product implements VenteInterface
{

    /**
     * @var title of Product
     */
    protected $title;

    /**
     * @var $reference of Product
     */
    protected $reference;
    /**
     * @var description of Product
     */
    protected $description;

    /**
     * @var quantity of Product
     */
    protected $quantity;

    /**
     * @var visibility of Product
     */
    protected $visible;

    /**
     * @var prix of Product
     */
    protected $prix;

    /**
     * @var prix of Product
     */
    protected $prixHT;

    /**
     * @var date of publication
     */
    protected $datePublication;

    /**
     * @var Category
     */
    protected $category;

    /**
     * @var
     */
    protected $couleur;


    /**
     * LIMIT of Description caracters
     */
    const LIMITDESC = 20;

    /**
     * Pays
     */
    const PAYS = "France";

    /**
     * Langues
     */
    const LANGUES = "Fr";



    /**
     * Constructor of objects
     * @param int $quantity
     * @param string $title
     * @throws AvailableException
     */
    public function __construct($title = "Titre par défaut", $prixHT, $reference)
    {

        $this->title = $title;
        $this->reference = $reference;
        $this->prixHT = $prixHT;
    }

    /**
     * @return title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param title $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return of
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param of $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param description $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param quantity $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return visibility
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param visibility $visible
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    }

    /**
     * @return prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param prix $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return prix
     */
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * @param prix $prixHT
     */
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;
    }

    /**
     * @return date
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * @param date $datePublication
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }





}
