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
		
		$out = $parser->getOutput();
		$out->addModules( 'ext.AddToCalendar' );
		
		$attrs = array();
		$link = wfMessage( 'addtocalendar-linktext' )->plain();
		
		foreach ( $args as $arg ) {
		
			$arg_clean = trim( $frame->expand( $arg ) );
			$arg_proc = explode( "=", $arg_clean, 2 );
			
			if ( count( $arg_proc ) == 1 ){
				// We put a link by default
				$link = trim( $arg_proc[0] );
			} else {
				if ( in_array( trim( $arg_proc[0] ), self::$attrs_ref ) ) {
					$attrs[ "data-".trim( $arg_proc[0] ) ] = trim( $arg_proc[1] );
				}
			}
		}

		$attrs["class"] = "addtocalendar";
		
		$tag = Html::element(
			'span',
			$attrs,
			$link
		);
		
		return $parser->insertStripItem( $tag, $parser->mStripState );
	}
	

}
