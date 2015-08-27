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


        $connexion2 = \App\Database::getInstance();
        dump($connexion2);


        $query = $connexion2->getConnexion()->query('SELECT * FROM actors');
        $res = $query->fetchAll();

        dump($res);







        ?>

</div>
</body>

</html>
