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
	'ACP_QUICKREPLY'          => 'Risposta Rapida',
	'ACP_QUICKREPLY_EXPLAIN'  => 'Impostazioni di Risposta Rapida',
	//
	'ACL_A_QUICKREPLY'        => 'Possibile modificare i parametri della Risposta Rapida',
	'ACL_F_QR_CHANGE_SUBJECT' => 'Possibile modificare l\'oggetto del Post',
	'ACL_F_QR_FULL_QUOTE'     => 'Possibile usare la citazione completa negli argomenti<br /><em>Sarà suggerito di usare la citazione veloce se l\'utente non ha questa autorizzazione e la funzionalità di citazione veloce è abilitata.</em>',
));
