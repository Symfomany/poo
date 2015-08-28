<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="container">

        <?php


        /**
         *************************************** Orienté Objet avec des Roles & Types d'Utilisateurs et un contenu Blog ********************************************
         */

        // Inclusions faite par Composer
        //include "classes/User.php";
        //include "classes/Editeur.php";
        //include "classes/Administrateur.php";

        //inclusion de l'autoload
        require __DIR__.'/vendor/autoload.php';


        $product1 = new \App\Webservice\Product("Apple Watch", "Description de cette montre", 600);
        $product2 = new \App\Webservice\Product("Apple iTV", "Description de cette TV", 2000);


        $json = new \App\Webservice\RenderInJson($product1);
        $xml = new \App\Webservice\RenderInXml($product1);
        $bootsrapp = new \App\Webservice\RenderInBootstrap($product1);

        dump($json->renderProduct(),$bootsrapp->renderProduct(), $xml->renderProduct());



        $json = new \App\Webservice\RenderInJson($product2);
        $xml = new \App\Webservice\RenderInXml($product2);
        $bootsrapp = new \App\Webservice\RenderInBootstrap($product2);

        dump($json->renderProduct(), $xml->renderProduct(), $bootsrapp->renderProduct());


//        dump($json->getWrapped()->renderProduct());

        $marque1 = new \App\Webservice\Marques("Nike", "Tous les vetements Nike");
        $marque2 = new \App\Webservice\Marques("Adidas", "Tous les vetements Adidas");

        $json = new \App\Webservice\RenderInJson($marque1);
        $xml = new \App\Webservice\RenderInXml($marque1);
        $bootsrapp = new \App\Webservice\RenderInBootstrap($marque1);

        dump($json->renderProduct(), $xml->renderProduct(), $bootsrapp->renderProduct());







        //        $samsungfactory = new \App\Smartphone\SamsungFactory();
//        $applefactory = new \App\Smartphone\AppleFactory();
//        $sonyfactory = new \App\Smartphone\SonyFactory();
//
//        $smartphone1 = $samsungfactory->createSmartphone(1,"gris", 16, 320);
//        $smartphone2 = $samsungfactory->createSmartphone(1,"bleue", 32, 320);
//        $smartphone3 = $applefactory->createSmartphone(1,"vert", 16, 320);
//        $smartphone4 = $applefactory->createSmartphone(1,"noir", 32, 320);
//        $smartphone5 = $sonyfactory->createSmartphone(1,"noir", 16, 320);
//        $smartphone6 = $sonyfactory->createSmartphone(1,"noir", 32, 320);
//
//        dump($smartphone1,
//            $smartphone2,
//            $smartphone3,
//            $smartphone4,
//            $smartphone5,
//            $smartphone6);

//        $anonym = function(\App\Smartphone\SmartphoneInterface $smartphone,  $couleur, $capacite, $poid){
//                new $smartphone( $couleur, $capacite, $poid);
//        };
//
//        dump($anonym(new \App\Smartphone\Iphone4S(1,"noir", 32, 320)));

        /*$manager = new \App\Commercial\Manager();

        $product = $manager->build(new \App\Commercial\ProductBuilder());

        dump($product);*/


//        $darty = new \App\Export\DartyFactory();

//        $product1 = $darty->createProduct('Apple Watch', "A22EF", 14.00);
////        dump($product->vente());
//
//        $category1 = $darty->createCategory('Montre', "Montre jolies");
////        dump($category->vente());



//        $boulanger = new \App\Export\BoulangerFactory();

//        $product2 = $boulanger->createProduct('Apple Watch', "A22EF", 14.00);
////        dump($product->vente());
//
//        $category2 = $boulanger->createCategory('Montre', "Montre jolies");
////        dump($category->vente());


//        $running = function(\App\Export\VenteInterface $obj){
//                return $obj->vente();
//        };
//
//
//
//        $abstractrunningprod = function(\App\Export\AbstractFactory $class, $title, $reference, $prix){
//                return $class->createProduct($title, $reference, $prix);
//        };
//
//        $abstractrunningcat = function(\App\Export\AbstractFactory $class, $title, $description){
//                return $class->createCategory($title, $description);
//        };
//
//        $produit = $abstractrunningprod($boulanger, 'Apple Watch', "A22EF", 14.00);
//        $produit2 = $abstractrunningprod($darty, 'Apple Ipad', 'B22EF', 150);
//        $cat = $abstractrunningcat($boulanger, "Montre", "Montre technologique");
//        $cat2 = $abstractrunningcat($darty, "Tablette", "Tablette Sexy");
//
//        dump($produit);
//        dump($produit->vente());
//
//        dump($produit2);
//        dump($produit2->vente());
//
//        dump($cat);
//        dump($cat->vente());
//
//        dump($cat2);
//        dump($cat2->vente());

        /*
        $promotions = new Promotions();
        $user = new User();
        $admin = new Administrateur();
        $actor = new Actor();

        var_dump($promotions);
        var_dump($admin);*/
        /*$actors = new \App\Actors();
        var_dump($actors);


        echo beautiful(
            bold(
                Util::camelize("lspdksqpodk khid ufhs uyg")
            )
        );*/

/*
        try{

                $produit = new \App\Product();
                $category = new \App\Category();
                $category->setTitle("Ma catégorie");
                $category->setVisible(false);

                $produit->setTitle("Apple Watch");
                $produit->setQuantity(5);
//                $produit->setVisible(false);
                $produit->setDatePublication(new \DateTime("2014-03-15"));
                $produit->setVisible(true);


        }
        catch (\App\Exceptions\AvailableException $e){
                // envoyer un mail à l'administrateur sur l'erreur en question
                echo "<div alert='alert alert-warning'>
                           Le produit/category {$e->getMessage()} est indisponible
                    </div>";
        }
        catch (Exception $e){
                // envoyer un mail à l'administrateur sur l'erreur en question
                echo "<code>".$e->getMessage() ." à la ligne : ". $e->getLine()." sur le fichier: {$e->getFile()}</code>";
        }

        echo $produit->getTitle();
*/
        //        try{
//                $produit = new \App\Product();
//                $produit->setQuantity("5");
//        }catch (\Exception $e){
//                echo "************";
//        }




/*
        try
        {
                $product = \App\CatalogFactory::create('Product');
                $product->setQuantity(5);
                $category = \App\CatalogFactory::create('Category');
                $product2 = \App\CatalogFactory::create('Product');
        }
        catch (RuntimeException $e)
        {
                echo $e->getMessage();
        }
        dump($category);
        dump($product);
        dump($product2);


        // je crée une suite d'opérations à risque et je peux capturer l'erreur par son exception

        try // Nous allons essayer d'effectuer les instructions situées dans ce bloc.
        {
                $moderateur = new \Application\Moderateur("Boyer", "JUlien" , 10);
                $produit = new \App\Product();
                $produit->setQuantity(5);
                $produit->setDescription("hbgy");

        }
        catch (\App\Exceptions\StringException $e) // Si l'exception n'est toujours pas attrapée, alors nous allons essayer d'attraper l'exception "Exception".
        {
                echo '[String: Exception] : ', $e->getMessage(); // La méthode __toString() nous affiche trop d'informations, nous voulons juste le message d'erreur.
        }
        catch (\App\Exceptions\AvailableException $e) // Si l'exception n'est toujours pas attrapée, alors nous allons essayer d'attraper l'exception "Exception".
        {
                echo '[Available: Exception] : ', $e->getMessage(); // La méthode __toString() nous affiche trop d'informations, nous voulons juste le message d'erreur.
        }
        catch (Exception $e) // Nous allons attraper les exceptions "Exception" s'il y en a une qui est levée.
        {
                echo 'Une exception a été lancée. Message d\'erreur : ', $e->getMessage();
        }


*/

//        var_dump($moderateur);






        ?>

</div>
</body>

</html>
