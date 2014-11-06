<?php

class AddToCalendar {

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
