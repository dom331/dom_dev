<?php
/**
*
* This file is part of the french language pack for the phpBB Forum Software package.
* This file is translated by phpBB-fr.com <http://www.phpbb-fr.com>
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Utilisez cette option si l’option de configuration change trop souvent pour être efficacement mise en cache',
	'CLI_CONFIG_CURRENT'				=> 'Valeur actuelle de la configuration. Utilisez 0 ou 1 pour spécifier des valeurs booléennes',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'La configuration « %s » a été supprimée',
	'CLI_CONFIG_NEW'					=> 'Nouvelle valeur de la configuration. Utilisez 0 ou 1 pour spécifier des valeurs booléennes',
	'CLI_CONFIG_NOT_EXISTS'				=> 'La configuration « %s » n’existe pas',
	'CLI_CONFIG_OPTION_NAME'			=> 'Le nom de l’option de configuration',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Utilisez cette option si la valeur doit être affichée à l’écran sans effectuer de retour à la ligne',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Valeur de l’incrément',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'La valeur de la configuration « %s » a été incrémentée',
	'CLI_CONFIG_SET_FAILURE'			=> 'Impossible de paramétrer la configuration « %s »',
	'CLI_CONFIG_SET_SUCCESS'			=> 'La configuration « %s » a été paramétrée',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Afficher à l’écran la liste de tâches cron prêtes et non prêtes',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Exécuter toutes les tâches cron prêtes',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nom de la tâche à exécuter',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Mettre à jour la base de données en appliquant les migrations',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Supprimer une option de configuration',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Désactiver l’extension spécifiée',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Activer l’extension spécifiée',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Trouver les migrations qui ne sont pas dépendantes',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Obtenir la valeur d’une option de configuration',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Incrémenter la valeur d’une option de configuration',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lister toutes les extensions présentes dans la base de données et le système de fichiers',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Exécuter en mode sans échec (sans les extensions)',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Lancer la console',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Désactiver et supprimer les données de l’extension spécifiée',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Recalculer la colonne « user_email_hash » de la table « phpbb_users »',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Définir la valeur d’une option de configuration seulement si l’ancienne correspond à la valeur actuelle',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Définir la valeur d’une option de configuration',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Impossible de désactiver l’extension « %s »',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'L’extension « %s » a été désactivée',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Impossible d’activer l’extension « %s »',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'L’extension « %s » a été activée',
	'CLI_EXTENSION_NAME'				=> 'Nom de l’extension',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Impossible de désactiver et de supprimer les données de l’extension « %s »',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'L’extension « %s » a été désactivée et ses données ont été supprimées',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Aucune extension n’a été trouvée',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Disponibles',
	'CLI_EXTENSIONS_DISABLED'			=> 'Désactivées',
	'CLI_EXTENSIONS_ENABLED'			=> 'Activées',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Tous les hachages des e-mails ont été recalculés',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . '. Optionnellement, vous pouvez spécifier le nom d’une seule tâche afin de n’exécuter que celle-ci.',
));
