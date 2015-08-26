<?php

namespace App;
use App\Exceptions\AvailableException;
use App\Exceptions\StringException;
use Symfony\Component\Config\Definition\Exception\Exception;

/**
 * Class Product.
 */
class Product
{
    /**
     * @var title of Product
     */
    protected $title;
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
     * Constructor
     */
    public function __construct($quantity = 1, $title = "Titre par défaut"){

        if($quantity < 1){
            throw new AvailableException("Le produit n'est pas crée....");
        }
        if(strlen($title) < 3){
            throw new AvailableException("Le titre du produit est NAZ!");
        }

        $this->title = $title;
        $this->quantity = $quantity;
        $this->visible = true;
        $this->datePublication = new \DateTime("- 2 days");
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Modifie la quantité et vérifie cette derniere
     * @param mixed $quantity
     * is_bool() Boolean One of the two special values true or false
        is_integer() Integer A whole number
        is_double() Double A floating point number (a number with a decimal point)
        is_string() String Character data
        is_object() Object An object
        is_array() Array An array
        is_resource() Resource A handle for identifying and working with external
        resources such as databases or files
        is_null()
     */
    public function setQuantity($quantity)
    {
        if($quantity == 0 || !is_int($quantity)){
            throw new \Exception('Votre quantité ne doit pas être égale à 0');
        }

        $this->quantity = $quantity;
    }


    public function setCategory($category)
    {
        if(is_object($category) && $category instanceof \App\Category && strlen($category->getTitle()) >= 5 ) {
            $this->category = $category;

        }else{
            throw new \Exception('Pas un objet de la cat');
        }
    }


    /**
     * @param mixed $visible
     */
    public function setVisible($visible){
        if(!is_bool($visible)){
            throw new \Exception("Attention ta visibilité doit etre un bolléen");
        }elseif( $visible == false){
            throw new AvailableException($this);
        }

        $this->visible = $visible;
    }



    /**
     * @return mixed
     */
    public function getVisible()
    {
        return $this->visible;
    }


    /**
     * @return mixed
     */
    public function getDatePublication()
    {
        return $this->datePublication;
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
        if(strlen($description) < 200){
            throw new StringException('La chaine doit etre inférieur à 200 caractères'); // On lance une exception "MonException".

        }

        $this->description = $description;

    }

    /*public function availableQuantity(Product $product){

        if($product->getQuantity()  == 0){
            throw new AvailableException('La quantité doit etre au minimum de 1'); // On lance une exception "MonException".
        }
    }*/

    public function availableVisible(Product $product){

        if($product->getQuantity()  == 0){
            throw new AvailableException('La visible doit etre à 1'); // On lance une exception "MonException".
        }
    }

    public function availableDate(Product $product){

        if($product->getDatePublication()  < new \DateTime("now")){
            throw new AvailableException("La date de publication doit etre supérieur à aujourd'hui"); // On lance une exception "MonException".
        }
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

    public function setDatePublication(\DateTime $date_publication){


        $this->date_publication = $date_publication;
    }


    public function __toString(){

        return $this->getTitle();
    }




}
