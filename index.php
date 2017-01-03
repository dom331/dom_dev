<?php


// Appel de la classe de chargement du moteur
require_once('Twig/Autoloader.php');
// registration de Twig
Twig_Autoloader::register();

// Définition du répertoire des templates
$loader = new Twig_Loader_Filesystem('templates');
// Utilisation du répertoire des templates avec cache
	
//$twig = new Twig_Environment($loader, array('cache' => 'templates_c'));
$twig = new Twig_Environment($loader, array('cache' => false));
		
// routage des pages    
// Par defaut la page d'accueil
$uriDemandee = "accueil";

// Sessions

session_start();
if(isset($_POST["logout"])){
    session_destroy();
    header('Location: index.php');
}

// Parsing du fichier des routes
$routes = parse_ini_file("param/routes.ini", true);
// Si une URI est demandée
if(!empty($_GET["page"])){
	$uriDemandee = $_GET["page"];
}
$page = $routes[$uriDemandee]["page"];
$template = $routes[$uriDemandee]["template"];

// Tableau de paramètres
$param = array();

if (!EMPTY($page)){
	require_once($page);
}

// Chargement du template
$template = $twig->loadTemplate($template);

$param["session"] = $_SESSION;

// Affichage de la page concern�e
echo $template->render($param);
//var_dump($param);




?>	
