<?php
namespace Tests;
use App\Exceptions\AvailableException;
use App\Product;


/**
 * Class ProductTests
 * @package Tests
 */
class ProductTests extends \PHPUnit_Framework_TestCase{


    /**
     * @return mixed
     */
    public function testconstruct()
    {
        $product =null;

        try {
            $product = new Product();
            $this->assertEquals(1, $product->getQuantity());
            $this->assertEquals("Titre par défaut", $product->getTitle());

            $product = new Product(2);
            $this->assertEquals(2, $product->getQuantity());
            $product->setQuantity(5);
            $this->assertEquals(5, $product->getQuantity());

            $product = new Product(2, "Apple Watch");
            $this->assertEquals(2, $product->getQuantity());
            $this->assertEquals("Apple Watch", $product->getTitle());

        }
        catch(AvailableException $e){
            echo "Une erreur est survenue sur la quantité";
        }
    }


}





