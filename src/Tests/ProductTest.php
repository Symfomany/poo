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

            $product = new Product(5);
            $this->assertEquals(2, $product->getQuantity());
            $product->setQuantity(5);
            $this->assertEquals(5, $product->getQuantity());

        }
        catch(AvailableException $e){
            echo "Une erreur est survenue sur la quantité";
        }
    }


}





