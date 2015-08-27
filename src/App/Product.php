<?php

namespace App;

use App\Exceptions\AvailableException;
use App\Exceptions\StringException;
use App\Interfaces\PublicationInterface;
use App\Interfaces\VisibleInterface;
use Export\VenteInterface;

/**
 * Class Product
 * @author Boyer Julien
 * @version 1.0
 * @package App
 */
class Product extends Catalog implements PublicationInterface, VisibleInterface
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
    public function __construct($quantity = 1, $title = "Titre par défaut")
    {

        if ($quantity < 1) {
            throw new AvailableException("Le produit n'est pas crée....");
        }
        if (strlen($title) < 3) {
            throw new AvailableException("Le titre du produit est NAZ!");
        }

        $this->title = $title;
        $this->quantity = $quantity;
        $this->visible = true;
        $this->datePublication = new \DateTime("- 2 days");
        $this->couleur = array("Bleu", "Noir", "Orange", "Jaune");
    }

    /**
     * Set quantity
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantity
     * @param $quantity
     * @throws \Exception
     */
    public function setQuantity($quantity)
    {
        if ($quantity == 0 || !is_int($quantity)) {
            throw new \Exception('Votre quantité ne doit pas être égale à 0');
        }

        $this->quantity = $quantity;
    }


    /**
     * Set a category
     * @param Category $category
     * @throws \Exception
     */
    public function setCategory(Category $category)
    {
        if (is_object($category) && $category instanceof \App\Category && strlen($category->getTitle()) >= 5) {
            $this->category = $category;

        } else {
            throw new \Exception('Pas un objet de la cat');
        }
    }


    /**
     * Set visibility
     * @param mixed $visible
     */
    public function setVisible($visible)
    {
        if (!is_bool($visible)) {
            throw new \Exception("Attention ta visibilité doit etre un bolléen");
        } elseif ($visible === false) {
            throw new AvailableException($this);
        }

        $this->visible = $visible;
    }


    /**
     * Get visibility
     * @return mixed
     */
    public function getVisible()
    {
        return $this->visible;
    }


    /**
     * Get date of publication
     * @return mixed
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }


    /**
     * Get title
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
     * Get a description
     * @return description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * set a description
     * @param $description
     * @throws StringException
     */
    public function setDescription($description)
    {
        if (strlen($description) < self::LIMITDESC) {
            throw new StringException('La chaine doit etre inférieur à 200 caractères'); // On lance une exception "MonException".

        }

        $this->description = $description;
    }

    /**
     * Check quantity if available
     * @param Product $product
     * @throws AvailableException
     */
    public function compareProduct(Product $product)
    {
        if ($this->getPrix() > $product->getPrix()) {
            return $product;
        }
        return $this;
    }
    /**
     * Check quantity if available
     * @param Product $product
     * @throws AvailableException
     */
    public function availableQuantity(Product $product)
    {

        if ($product->getQuantity() == 0) {
            throw new AvailableException('La quantité doit etre au minimum de 1'); // On lance une exception "MonException".
        }
    }

    /**
     * Available a product
     * @param Product $product
     * @throws AvailableException
     */
    public function availableVisible(Product $product)
    {

        if ($product->getQuantity() == 0) {
            throw new AvailableException('La visible doit etre à 1'); // On lance une exception "MonException".
        }
    }

    /**
     * Available of date
     * @param Product $product
     * @throws AvailableException
     */
    public function availableDate(Product $product)
    {

        if ($product->getDatePublication() < new \DateTime("now")) {
            throw new AvailableException("La date de publication doit etre supérieur à aujourd'hui"); // On lance une exception "MonException".
        }
    }

    /**
     * Get a price
     * @return prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set a price
     * @param prix $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * Set date of publication
     * @param \DateTime $date_publication
     */
    public function setDatePublication(\DateTime $date_publication)
    {

        $this->date_publication = $date_publication;
    }


    /**
     * Convert object to string with title of product
     * @return title
     */
    public function __toString()
    {

        return $this->getTitle();
    }


    /**
     * @return array
     */
    public function getLanguage(){
        return array(self::PAYS, self::LANGUES);
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
