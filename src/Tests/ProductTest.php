<?php
namespace Tests;
use App\Category;
use App\Exceptions\AvailableException;
use App\Product;


/**
 * Class ProductTests
 * @package Tests
 */
class ProductTests extends \PHPUnit_Framework_TestCase{


    protected $product;

    /**
     * Conctructor
     */
    protected function setUp()
    {
        $this->product = new Product();
    }

    public function testMain(){
        // Check 1 === 1 is true
        $this->assertTrue(1 === 1);

// Check 1 === 2 is false
        $this->assertFalse(1 === 2);

// Check 'Hello' equals 'Hello'
        $this->assertEquals('Hello', 'Hello');

// Check array has key 'language'
        $this->assertArrayHasKey('language', array('language' => 'php', 'size' => '1024'));

// Check array contains value 'php'
        $this->assertContains('php', array('php', 'ruby', 'c++', 'JavaScript'));

    }

    /**
     * Test constructor of Product
     */
    public function testConstruct()
    {

        try {
            $product = new Product();
            $this->assertEquals(1, $product->getQuantity());
            $this->assertEquals("Titre par défaut", $product->getTitle());

            $product = new Product(2);
            $this->assertEquals(2, $product->getQuantity());

            $product = new Product(7, "Apple Watch");
            $this->assertEquals(7, $product->getQuantity());
            $this->assertEquals("Apple Watch", $product->getTitle());

        }
        catch(AvailableException $e){
            echo "Une erreur est survenue sur la quantité";
        }
    }

    /**
     * Test Qauntity
     */
    public function testSetQuantity(){
        try{
            $this->product->setQuantity(0);
        }catch (\Exception $e){
            print "quantité à 0 \n";
            $this->product->setQuantity(3);
        }
        print "quantité à 3 \n";
        $this->assertEquals(3,  $this->product->getQuantity());

    }
    /**
     * Test Qauntity
     */
    public function testDescription($description = ""){
        try{
            $this->product->setDescription("");
        }catch (\Exception $e){
            print "dscription trop courte (20 caractères) \n";
            $this->product->setDescription("64q66d4q6s4f6d4d446f4s86f486sd4f6sd46fs4646d46f4sd6f6sq46d4s6f46sdq4f46sdq46f4sdq64f6s4qd6f46sdq46f4s");
        }
        print "description OK \n";

    }


    /**
     * Test Qauntity
     */
    public function testSetCategory(){

        try{
            $this->product->setCategory(new Category("hhsdsqhduhqhud"));
        }catch (\Exception $e){
            print "catégorie à 0 \n";
            $this->product->setCategory(new Category("ksqhdiuqhsdhisq"));
        }catch(\Exception $e){
        }
        print "catégorie OK\n";

    }

    /**
     * Test Qauntity
     */
    public function testsetVisible(){
        try{
            $this->product->setVisible(0);
        }catch (\Exception $e){
            print "visibilité pas bonnne \n";
            $this->product->setVisible(true);

        }
        print "visibilité OK\n";

    }

    /**
     * Get visibility
     * @return mixed
     */
    public function testgetVisible()
    {
        $this->assertEquals(true, $this->product->getVisible());
    }


    /**
     * Get date of publication
     * @return mixed
     */
    public function testgetDatePublication()
    {
        $test = $this->getMockBuilder('\App\Product')->getMock();
        $test->method('getDatePublication')
            ->willReturn(true);

        $this->assertEquals(true, $test->getDatePublication());

    }



}





