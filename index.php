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


        use App\Promotions;
        use App\Actors as Actor;

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
