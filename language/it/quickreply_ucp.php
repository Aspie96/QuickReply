<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2017 Tatiana5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'QR_CHANGE_QUICKNICK_STRING' => 'Sostituisci il menù di dropdown che appare quando clicchi sul nickname con il link “Referenzia con nome utente” sotto l\'avatar',
	'QR_ENABLE_AJAX_PAGINATION'  => 'Non aggiornare il modulo di risposta rapida quando esplori un argomento',
	'QR_ENABLE_SCROLL'           => 'Abilita lo scorrimento automatico quando esplori un argomento',
	'QR_ENABLE_SOFT_SCROLL'      => 'Abilita lo scorrimento soffice e le animazioni quando esplori un argomento e dopo la risposta rapida',
	'QR_ENABLE_WARNING'          => 'Avvisa se il testo inserito nella risposta rapida può essere perso',
	'QR_FIX_EMPTY_FORM'          => 'Permette di correggere il modulo di risposta rapida se è vuoto',
));
