<?php

class AddToCalendar {

	private static $attrs_ref = array( "start", "end", "address", "description", "title", "duration" );

	/*
	 * @param $parser Parser
	 * @param $frame PPFrame
	 * @param $args array
	 * @return string
	 */
	 
	public static function process_AddToCalendar( &$parser, $frame, $args ) {
		
		
		
		$output = "";
		return $parser->insertStripItem( $output, $parser->mStripState );
	}
	
	

}
