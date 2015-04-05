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

// Use Finder Symfony 2
use Symfony\Component\Finder\Finder;

/**
 * Session
 */
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * YAML
 */
use Symfony\Component\Yaml\Parser;

/**
 * Processing
 */
use Symfony\Component\Process\Process;

/**
 * Injection des dépendances
 */
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Config Component
 */
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


/**
 * Using CSS Selector
 */
use Symfony\Component\CssSelector\CssSelector;

/**
 * Using DOMCrawler
 */
use Symfony\Component\DomCrawler\Crawler;


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


/**
 * Injecting classes
 */
$container = new ContainerBuilder();
$container
    //add User Object
    ->register('user', "App\User")
    ->addArgument('Julien')
    ->addArgument('Boyer');

$container
    //add Administrateur Object
    ->register('administrateur', "App\Administrateur")
    ->addArgument('Djamchid')
    ->addArgument('Dallili')
    ->addArgument('Maison 3WA')
    ->addArgument('Directeur et Entrepreneur')
    ->addArgument('http://www.google.fr')
    ->addArgument(4);


/**
 * Using YAML File to load services
 */
$loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/config/'));
$loader->load('services.yml');



$objectuser = $container->get('user');
$objectadmin = $container->get('administrateur');
$objectelodie = $container->get('user.elodie');

var_dump($objectuser);
var_dump($objectadmin);
var_dump($objectelodie);



/**
 * Find img
 */
$finder = new Finder();
$finder->files()->in('./img/');

echo "<ul>";
foreach ($finder as $file) {
    // Print the absolute path
    echo "<li>".$file->getRealpath() . " => " . $file->getRelativePathname()."</li>";

}

echo "</ul>";

/**
 * Sub Process
 */
$process = new Process('ls -al');
$process->run();

// executes after the command finishes
if (!$process->isSuccessful()) {
    throw new \RuntimeException($process->getErrorOutput());
}

var_dump($process->getOutput());

$process = new Process('cd img && ls -al');
$process->run();

// executes after the command finishes
if (!$process->isSuccessful()) {
    throw new \RuntimeException($process->getErrorOutput());
}

var_dump($process->getOutput());


/**
 * Parse in YAML
 */

$yaml = new Parser();

$configuration = $yaml->parse(file_get_contents('config/app.yml'));
var_dump($configuration);


/**
 * Print HTML DOM
 */
echo "<h3> li numéro 2 dans les images du Finder img/ </h3>";




//descendant-or-self::*/*[name() = 'ul' and (position() = 1)]
$xpathelement = CssSelector::toXPath('ul > li:nth-child(1)');
print $xpathelement;

// example 1: for everything with an id
//$elements = $xpath->query("//*[@id]");

$url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
$url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
$url .= $_SERVER["REQUEST_URI"];

$crawler = new Crawler($url);
$crawler = $crawler->filterXPath($xpathelement);

foreach ($crawler as $domElement) {
    var_dump($domElement->nodeName);
}


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


