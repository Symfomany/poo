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
        require_once __DIR__.'/vendor/autoload.php';

        // USE des classes dont j'ai besoin pour instancier
        use Application\User;
        use Application\Editeur;
        use Application\Commercial;
        use Application\Administrateur;
        use Application\Moderateur;
        use Application\Ecrivain;

        use Libraries\User as UserLib;


        $userlib = new UserLib("juju", "pass");


        //je créer un objet datetime instancié à la date d'aujourd'hui
        $date = new \Datetime('now');
        // j'affiche la datre au format d/m/Y
        echo $date->format('d/m/Y');

        echo "<br />";

        $date->modify('+1 day');
        echo $date->format('d/m/Y');

        echo "<br />";

        $date->modify('+3 month');
        echo $date->format('d/m/Y');

        echo "<br />";

        $date->modify('+1 year');
        echo $date->format('d/m/Y');

        echo "<br />";

        $date->modify('+1 year -3 month');
        echo $date->format('d');

        //

        //        $date = new \DateTime('06/01/2014');
        $datefrom = \DateTime::createFromFormat('d/m/Y','06/01/2014');
        echo "Date ".$datefrom ->format('Y-m-d');




































        //use debug SYmfony 2
        use Symfony\Component\Debug\Debug;
        use Symfony\Component\Debug\ErrorHandler;
        use Symfony\Component\Debug\ExceptionHandler;


        // Initialize Debugging by SYmfony 2...
        Debug::enable();
        ErrorHandler::register();
        ExceptionHandler::register();

        echo "<h2>Utilisateurs </h2>";


        //throw new CustomException(404,'coucou');

        /**
         * Manipulation des dates avec Datetime
         */

        $datenow = new \Datetime('now');
        echo "Date du jour : ".$datenow->format('d/m/Y');

        echo "<br />";

        $dateyesterday = $datenow->modify('-1 day');
        echo "Date d'y hier : ".$datenow->format('d/m/Y');

        echo "<br />";

        $dateweek = $datenow->modify('-1 week');
        echo "Date il y a 1 semaine : ".$dateweek->format('d/m/Y');

        echo "<br />";

        $datemonth = $datenow->modify('+ 2  month');
        echo "Date dans 2 mois : ".$datemonth->format('d/m/Y');

        echo "<br />";

        $dateyear = $datenow->modify('+ 1  year');
        echo "Date dans 1 an : ".$dateyear ->format('d/m/Y');

        echo "<br />";


//        $date = new \DateTime('06/01/2014');
        $date = \DateTime::createFromFormat('d/m/Y','06/01/2014');
        echo "Date ".$date ->format('d/m/Y');

        //instanciation : création de 2 objets User
        $user1 = new User('Vincent', 'Phillippe');
        $user2 = new User('Elodie', 'Perrotton');

        //var_dump($user1);

        // une constante d'appel depuis un objet de la clase
        echo beautiful($user1->getNom()). "<br />";
        echo beautiful($user1::FORMATION). "<br />";

        // un attribut static s'appel depuis la classe
        echo beautiful(User::getLangue()). "<br />";

        echo "<h3>Noms: </h3>";

        // appel d'un helper bold() comme beautiful() en dessus en affichant le nom de chaque utilisateur
        echo bold($user1->getNom()). "<br />";
        echo bold($user2->getNom()). "<br />";

        $user1->setEnabled(0);

        echo beautiful("L'utilisateur ".$user1->getNom()." est inactif");


        echo "<h3>Prenoms: </h3>";

        echo $user1->getPrenom(). "<br />";
        echo $user2->getPrenom(). "<br />";


        echo "<h3>Réactions: </h3>";

        echo $user1->reagir("François Hollande est un tres bon président !"). "<br />";
        echo $user2->reagir("Nicolas Sarkozy est pas mal physiquement..."). "<br />";

        //appel d'une méthodes repond() en envoyant l'utilisateur
        echo $user1->repond($user2, "Il ne me plait pas beaucoups le nain de jardin!"). "<br />";
        echo $user2->repond($user1, "Remarque le tient, il est aussi grand que sa réputation!"). "<br />";

        echo $user1->noter(4);

        echo "<h2>Moderateur </h2>";

        $moderateur1 =  new Moderateur("Oussama", "Ben-Laden", 4);
        echo beautiful($moderateur1->modererUser($user2));


        echo "<hr />";


        echo "<h2>Editeurs</h2>";


        $editeur1 = new Editeur('Alexandre', 'Dupond', 'CharlieHebdo', 'Je vois la vie en rose depuis tout petit');
        $editeur2 = new Editeur('Jérémy', 'Durand', 'LeMonde', "J'aime Symfony 2 depuis mes 14 ans");

        echo "<h3>Noms: </h3>";


        echo $editeur1->getNom(). "<br />";
        echo $editeur2->getNom(). "<br />";


        echo "<h3>Prenoms: </h3>";

        echo $editeur1->getPrenom(). "<br />";
        echo $editeur2->getPrenom(). "<br />";

        echo "<h3>Réactions</h3>";

        echo $user1->repond($editeur1, "Il ne me plait pas beaucoups le nain de jardin!"). "<br />";

        echo "<h3>Maison Editions: </h3>";


        echo $editeur1->getEdition(). "<br />";
        echo $editeur2->getEdition(). "<br />";


        echo "<h3>Biographie: </h3>";

        echo $editeur1->getBiography(). "<br />";
        echo $editeur2->getBiography(). "<br />";




        echo "<hr />";

        echo "<h2>Administrateur</h2>";


        $Administrateur1 = new Administrateur('Ludovic', 'Verrecchia', null,"Vie de Ludo...",'http://www.google.com/ludovic.jpg' ,3 );
        $Administrateur2 = new Administrateur('Julien', 'Boyer', null, "I love this is fuckin framework",'http://www.google.com/julien.jpg' ,4 );

        echo "<h3>Noms: </h3>";


        echo $Administrateur1->getNom(). "<br />";
        echo $Administrateur2->getNom(). "<br />";


        echo "<h3>Prenoms: </h3>";

        echo $Administrateur1->getPrenom(). "<br />";
        echo $Administrateur2->getPrenom(). "<br />";



        echo "<h3>Maison Editions: </h3>";

        echo $Administrateur1->getEdition(). "<br />";
        echo $Administrateur2->getEdition(). "<br />";


        echo "<h3>Biographie: </h3>";

        echo $Administrateur1->getBiography(). "<br />";
        echo $Administrateur2->getBiography(). "<br />";


        echo "<h3>Avatar: </h3>";

        echo $Administrateur1->getAvatar(). "<br />";
        echo $Administrateur2->getAvatar(). "<br />";


        echo "<h3>Nb Etoiles: </h3>";

        echo $Administrateur1->getEtoiles(). "<br />";
        echo $Administrateur2->getEtoiles(). "<br />";


        echo "<h2>Autres manières de fairede la POO...</h2>";



        /**
         * Autres pratiques en POO...
         */
        //utilisation d'un helpers beautiful() et d'une methode static de classe
        echo beautiful(User::getPays());

        // utilisation d'une methode statique avec une classe autoloader et chargée
        echo Format::slugify(User::getFormation());

        //Utilisation d'une classe sans argument si j'ai rien a lui donner
        $utile = new Util;

        //appel d'une methode camelize à l'objet $util
        echo beautiful($utile->camelize("Test Alpha 3W-Academy"));


        echo "<hr />";


        /**
         * Techniques avancée de POO
         */
        $usereference = $user1;
        $usereference->setNom('Vincente');

        echo beautiful($user1->getNom()) //Vincente

        /**
         * MAIS...
         */;
        $copie = clone $user2;
        $copie->setNom('Fauxnom');

        echo beautiful($user2->getNom()); //Vincent :)


        /**
         * Récapitulatif
         */
        $user1->getCaracteristiques();
        $user2->getCaracteristiques();
        $moderateur1->getCaracteristiques();
        $editeur1->getCaracteristiques();
        $editeur2->getCaracteristiques();





        ?>

</div>
</body>

</html>
