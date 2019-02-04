<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'ACL_U_MCHAT_USE'						=> 'Kan mChat gebruiken',
	'ACL_U_MCHAT_VIEW'						=> 'Kan mChat bekijken',
	'ACL_U_MCHAT_EDIT'						=> 'Kan eigen berichten bewerken',
	'ACL_U_MCHAT_DELETE'					=> 'Kan eigen berichten verwijderen',
	'ACL_U_MCHAT_MODERATOR_EDIT'			=> 'Kan gebruikers hun berichten aanpassen',
	'ACL_U_MCHAT_MODERATOR_DELETE'			=> 'Kan gebruikers hun berichten verwijderen',
	'ACL_U_MCHAT_IP'						=> 'Kan IP adressen bekijken',
	'ACL_U_MCHAT_PM'						=> 'Kan privé berichten gebruiken',
	'ACL_U_MCHAT_LIKE'						=> 'Kan berichten leuk vinden',
	'ACL_U_MCHAT_QUOTE'						=> 'Kan berichten citeren',
	'ACL_U_MCHAT_FLOOD_IGNORE'				=> 'Kan de flood limiet negeren',
	'ACL_U_MCHAT_ARCHIVE'					=> 'Kan het archief bekijken',
	'ACL_U_MCHAT_BBCODE'					=> 'Kan BBCodes gebruiken',
	'ACL_U_MCHAT_SMILIES'					=> 'Kan smileys gebruiken',
	'ACL_U_MCHAT_URLS'						=> 'Kan automatische samengestelde URLs posten',

	'ACL_U_MCHAT_AVATARS'					=> 'Kan aanpassen: <em>Toon avatars</em>',
	'ACL_U_MCHAT_CAPITAL_LETTER'			=> 'Kan aanpassen: <em>Maak hoofdletter van eerste letter</em>',
	'ACL_U_MCHAT_CHARACTER_COUNT'			=> 'Kan aanpassen: <em>Toon aantal karakters</em>',
	'ACL_U_MCHAT_DATE'						=> 'Kan aanpassen: <em>Datum formaat</em>',
	'ACL_U_MCHAT_INDEX'						=> 'Kan aanpassen: <em>Toon op index</em>',
	'ACL_U_MCHAT_LOCATION'					=> 'Kan aanpassen: <em>Locatie van mChat op de index pagina</em>',
	'ACL_U_MCHAT_MESSAGE_TOP'				=> 'Kan aanpassen: <em>Locatie van nieuwe chat berichten</em>',
	'ACL_U_MCHAT_POSTS'						=> 'Kan aanpassen: <em>Toon nieuwe berichten</em>',
	'ACL_U_MCHAT_RELATIVE_TIME'				=> 'Kan aanpassen: <em>Toon relatieve tijd</em>',
	'ACL_U_MCHAT_SOUND'						=> 'Kan aanpassen: <em>Speel geluiden</em>',
	'ACL_U_MCHAT_WHOIS_INDEX'				=> 'Kan aanpassen: <em>Laat zien wie aan het chatten is onder de chat</em>',
	'ACL_U_MCHAT_STATS_INDEX'				=> 'Kan aanpassen: <em>Laat zien wie aan het chatten is in het gedeelte met statistieken</em>',

	'ACL_A_MCHAT'							=> 'Kan mChat instellingen beheren',
]);
