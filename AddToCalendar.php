<?php


if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}

$GLOBALS['wgExtensionCredits']['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'AddToCalendar',
	'version' => '0.1',
	'url' => 'https://github.com/SimilisTools/mediawiki-addToCalendar',
	'author' => array( 'Toniher' ),
	'descriptionmsg' => 'addtocalendar-desc',
);

$GLOBALS['wgAutoloadClasses']['AddToCalendar'] = __DIR__.'/AddToCalendar_body.php';
$GLOBALS['wgMessagesDirs']['AddToCalendar'] = __DIR__ . '/i18n';
$GLOBALS['wgExtensionMessagesFiles']['AddToCalendar'] = __DIR__ . '/AddToCalendar.i18n.php';
$GLOBALS['wgExtensionMessagesFiles']['AddToCalendarMagic'] = __DIR__ . '/AddToCalendar.i18n.magic.php';

$wgHooks['ParserFirstCallInit'][] = 'wfRegisterAddToCalendar';


/**
 * @param $parser Parser
 * @return bool
 */
function wfRegisterAddToCalendar( $parser ) {
	$parser->setFunctionHook( 'AddToCalendar', 'AddToCalendar::process_AddToCalendar', SFH_OBJECT_ARGS );
}
