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

        use App\User;
        use App\Category;
        use App\Administrateur;

        $user = new User();
        $actors = new \App\Actors();
        $cat = new Category();

        $user->setAge(18);

        echo Util::camelize("sdgfsdugf sduyfg sduyfgsd");

        echo beautiful(bold($user->getAge()));
        var_dump($user);
        var_dump($actors);
        var_dump($cat);


        $format = new Format();
        var_dump($format);




        ?>

</div>
</body>

</html>
