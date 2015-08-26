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
            $stack = array();
            $this->assertEquals(0, count($stack));

            array_push($stack, 'foo');
            $this->assertEquals('foo', $stack[count($stack)-1]);
            $this->assertEquals(1, count($stack));

            $this->assertEquals('foo', array_pop($stack));
            $this->assertEquals(0, count($stack));

            $product = new Product();
            $this->assertEquals(1, $product->getQuantity());
            $this->assertEquals("Titre par défaut", $product->getTitle());

            $product = new Product(2);
            $this->assertEquals(2, $product->getQuantity());
            $product->setQuantity(5);
            $this->assertEquals(5, $product->getQuantity());

            $product = new Product(2, "Apple Watch");
            $this->assertEquals(3, $product->getQuantity());
            $this->assertEquals("Apple Watch", $product->getTitle());

        }
        catch(AvailableException $e){
            echo "Une erreur est survenue sur la quantité";
        }
    }


}





