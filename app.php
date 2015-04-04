<?php
require_once __DIR__.'/vendor/autoload.php';


//Use Symfony2 Component
use Command\GreatCommand;
use Symfony\Component\Console\Application;

/**
 * Another Component
 */
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

/**
 * Debug
 */

//use debug SYmfony 2
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;


/**
 * Session
 */
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * YAML
 */
use Symfony\Component\Yaml\Parser;



// Initialize Debugging by SYmfony 2...
Debug::enable();
ErrorHandler::register();
ExceptionHandler::register();



/**
 * Using Session
 */
$session = new Session();
$session->start();

// set and get session attributes
$nb = (int)$session->get('nb');
$nb = $nb + 1;
$session->set('nb', $nb);

$nbnew = $session->get('nb');
var_dump($nbnew);


$yaml = new Parser();

$configuration = $yaml->parse(file_get_contents('config/app.yml'));
var_dump($configuration);


/**
 * Using Filesystem
 */
/*
$fs = new Filesystem();

try {
    $fs->mkdir('images/produits/'.mt_rand());
} catch (IOExceptionInterface $e) {
    echo "An error occurred while creating your directory at ".$e->getPath();
}

// set modification time to the current timestamp
$fs->touch('message.txt');
*/

/**
 * Console Component Symfony 2
 */
$application = new Application();
$application->add(new GreatCommand());
$application->run();


