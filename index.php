<?php
// Appel de la classe de chargement du moteur
require_once('Twig/Autoloader.php');
// registration de Twig
Twig_Autoloader::register();
    
// D�finition du r�pertoire des templates
$loader = new Twig_Loader_Filesystem('templates');
// Utilisation du r�pertoire des templates avec cache
	
//$twig = new Twig_Environment($loader, array('cache' => 'templates_c'));
$twig = new Twig_Environment($loader, array('cache' => false));
		
// routage des pages    
// Par d�faut la page d'accueil
$uriDemandee = "accueil";

// Démarrage des sessions
session_start();

// Parsing du fichier des routes
$routes = parse_ini_file("param/routes.ini", true);
// Si une URI est demand�e
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





?>	
