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
	'QR_ATTACH_NOTICE'                 => 'Questa risposta contiene almeno un allegato.',
	'QR_BBCODE'                        => 'BBCode',
	'QR_CANCEL_SUBMISSION'             => 'Annulla invio',
	'QR_CTRL_ENTER'                    => 'Potresti anche inviare la tua risposta premendo simultaneamente i tasti Ctrl e Invio sulla tua tastiera.',
	'QR_FORM_HIDE'                     => 'Collassa il modulo di risposta rapida',
	'QR_FULLSCREEN'                    => 'Editor a schermo intero',
	'QR_FULLSCREEN_EXIT'               => 'Esci dalla modalità a schermo intero',
	'QR_INSERT_TEXT'                   => 'Inserisci citazione nel modulo Risposta Rapida',
	'QR_QUICKQUOTE'                    => 'Citazione rapida',
	'QR_QUICKQUOTE_TITLE'              => 'Rispondi con citazione rapida',
	'QR_LOADING'                       => 'Caricamento in corso',
	'QR_LOADING_ATTACHMENTS'           => 'Attendere il completamento del caricamento degli allegati...',
	'QR_LOADING_NEW_FORM_TOKEN'        => 'Il token del modulo era scaduto ed è stato aggiornato.<br />Reinvio del modulo...',
	'QR_LOADING_NEW_POSTS'             => 'Almeno un nuovo post è stato aggiunto al topic.<br />La tua risposta non è stata inviata perché vorrai probabilmente modificarla.<br />Scaricamento dei nuovi post...',
	'QR_LOADING_PREVIEW'               => 'Scaricamento dell\'anteprima...',
	'QR_LOADING_SUBMITTED'             => 'Il tuo post è stato inviato con successo.<br />Scaricamento dei risultati...',
	'QR_LOADING_SUBMITTING'            => 'Invio della tua risposta...',
	'QR_LOADING_WAIT'                  => 'Attesa della risposta del server...',
	'QR_MORE'                          => 'Più azioni',
	'QR_NO_FULL_QUOTE'                 => 'Per favore, seleziona una parte di questo messaggio per poterla citare.',
	'QR_PREVIEW_CLOSE'                 => 'Chiudi il blocco di anteprima',
	'QR_PROFILE'                       => 'Vai al profilo',
	'QR_QUICKNICK'                     => 'Referenzia con nome utente',
	'QR_QUICKNICK_TITLE'               => 'Inserisci nome utente nel modulo Risposta Rapida',
	'QR_REPLY_IN_PM'                   => 'Rispondi in PM',
	'QR_TYPE_REPLY'                    => 'Digita la tua risposta qui...',
	'QR_WARN_BEFORE_UNLOAD'            => 'La risposta da te inserita non è stata inviata e potrebbe essere persa!',
	// begin mod Translit
	'QR_TRANSLIT_TEXT'                 => 'Translit',
	'QR_TRANSLIT_TEXT_TO_RU'           => 'in russo', // can be changed to your language here and below
	'QR_TRANSLIT_TEXT_TOOLTIP'         => 'Per la visualizzazione istantanea in russo clicca il bottone',
	'QR_TRANSLIT_FROM'                 => 'je,jo,ayu,ay,aj,oju,oje,oja,oj,uj,yi,ya,ja,ju,yu,ja,y,zh,i\',shch,sch,ch,sh,ea,a,b,v,w,g,d,e,z,i,k,l,m,n,o,p,r,s,t,u,f,x,c,\'e,\',`,j,h', // language specific adaptation required (do not use spaces or line breaks), use commas as separators here and below
	'QR_TRANSLIT_TO'                   => 'э,ё,aю,ай,ай,ою,ое,оя,ой,уй,ый,я,я,ю,ю,я,ы,ж,й,щ,щ,ч,ш,э,а,б,в,в,г,д,е,з,и,к,л,м,н,о,п,р,с,т,у,ф,х,ц,э,ь,ъ,й,х',
	'QR_TRANSLIT_FROM_CAPS'            => 'Yo,Jo,Ey,Je,Ay,Oy,Oj,Uy,Uj,Ya,Ja,Ju,Yu,Ja,Y,Zh,I\',Sch,Ch,Sh,Ea,Tz,A,B,V,W,G,D,E,Z,I,K,L,M,N,O,P,R,S,T,U,F,X,C,EA,J,H',
	'QR_TRANSLIT_TO_CAPS'              => 'Ё,Ё,Ей,Э,Ай,Ой,Ой,Уй,Уй,Я,Я,Ю,Ю,Я,Ы,Ж,Й,Щ,Ч,Ш,Э,Ц,А,Б,В,В,Г,Д,Е,З,И,К,Л,М,Н,О,П,Р,С,Т,У,Ф,Х,Ц,Э,Й,Х',
	// end mod Translit
	// begin mod CapsLock Transform
	'QR_TRANSFORM_TEXT'                => 'Modifica il Maiuscole e Minuscole',
	'QR_TRANSFORM_TEXT_TOOLTIP'        => 'Premi un bottone per modificare maiuscole e minuscole nel testo selezionato',
	'QR_TRANSFORM_TEXT_LOWER'          => '&#9660; abc',
	'QR_TRANSFORM_TEXT_UPPER'          => '&#9650; ABC',
	'QR_TRANSFORM_TEXT_INVERS'         => '&#9660;&#9650; aBC',
	'QR_TRANSFORM_TEXT_LOWER_TOOLTIP'  => 'minuscolo',
	'QR_TRANSFORM_TEXT_UPPER_TOOLTIP'  => 'MAIUSCOLE',
	'QR_TRANSFORM_TEXT_INVERS_TOOLTIP' => 'iNVERTI mAIUSCOLE e mINUSCOLE',
	// end mod CapsLock Transform
));
