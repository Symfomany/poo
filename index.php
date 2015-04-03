<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <?php



    /**
     *************************************** Orienté Objet avec des Roles & Types d'Utilisateurs et un contenu Blog ********************************************
     */

    // Inclusions faite par Composer
    //include "classes/User.php";
    //include "classes/Editeur.php";
    //include "classes/Administrateur.php";

    require_once __DIR__.'/vendor/autoload.php';

    //require_once "vendor/autoload.php"; => a faire avec Composer et UniversalLoader


    use classes\User;
    use classes\Editeur;
    use classes\Administrateur;


    echo "<h3>Utilisateurs crées: </h3>";


    $user1 = new User('Vincent', 'Phillippe');
    $user2 = new User('Elodie', 'Perrotton');

    echo "<h3>Noms: </h3>";


    echo bold($user1->getNom()). "<br />";
    echo bold($user2->getNom()). "<br />";


    echo "<h3>Prenoms: </h3>";

    echo $user1->getPrenom(). "<br />";
    echo $user2->getPrenom(). "<br />";


    echo "<h3>Réactions: </h3>";

    echo $user1->reagir("François Hollande est un tres bon président !"). "<br />";
    echo $user2->reagir("Nicolas Sarkozy est pas mal physiquement..."). "<br />";
    echo $user1->repond($user2, "Il ne me plait pas beaucoups le nain de jardin!"). "<br />";
    echo $user2->repond($user1, "Remarque le tient n'est pas très grand"). "<br />";

    echo $user1->noter(4);

    echo beautiful(User::getPays());

    echo Format::slugify(User::getFormation());

    //sans argument si j'ai rien a lui donner
    $satanize = new Util;

    echo beautiful($satanize->camelize("Test Alpha 3W-Academy"));


    echo "<hr />";

    echo "<h3>Editeurs crées: </h3>";


    $editeur1 = new Editeur('Alexandre', 'Dupond', 'CharlieHebdo', 'Je vois la vie en rose depuis tout petit');
    $editeur2 = new Editeur('Jérémy', 'Durand', 'LeMonde', "J'aime Symfony 2 depuis mes 14 ans");

    echo "<h3>Noms: </h3>";


    echo $editeur1->getNom(). "<br />";
    echo $editeur2->getNom(). "<br />";


    echo "<h3>Prenoms: </h3>";

    echo $editeur1->getPrenom(). "<br />";
    echo $editeur2->getPrenom(). "<br />";



    echo "<h3>Maison Editions: </h3>";


    echo $editeur1->getEdition(). "<br />";
    echo $editeur2->getEdition(). "<br />";


    echo "<h3>Biographie: </h3>";

    echo $editeur1->getBiography(). "<br />";
    echo $editeur2->getBiography(). "<br />";




    echo "<hr />";

    echo "<h3>Administrateur crées: </h3>";


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





    ?>

</body>
</html>
