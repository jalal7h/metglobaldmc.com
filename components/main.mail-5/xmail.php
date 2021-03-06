<?php

# jalal7h@gmail.com
# 2017/07/24
# 3.8

function xmail( $to, $subject, $text, $from='', $html=0, $mssp_id=0 ){

	if( its_local() or debug ){
		xmail_memo( $to, $subject, $text );
		if( its_local() ){
			return true;
		}
	}
	dg();
	
	#
	# fix from
	if( $from == '' ){
		$from_name = setting('tiny_title');
		$from_addr = "noreply@".str_replace("www.", "", $_SERVER['SERVER_NAME']);
		$from = '"'.$from_name.'" <'.$from_addr.'>';
	}

	# 
	# force html
	if( $html ){
		$text = '<p style="direction: '.lang_dir.'" dir="'.lang_dir.'" >'.$text.'</p>';

	} else if( xmail_force_html === true ){
		$text = nl2br($text);
		$text = '<html><body>
		<p style="color: #444; font-size: 14px; font-family: tahoma; direction: '.lang_dir.'" dir="'.lang_dir.'">'.$text.'</p>
		</body></html>';
		$html = 1;
	}
	

	#
	# maybe local or remote
	if( is_component('mailserverselector') ){
		dg();
		return mss( $to, $subject, $text, $from, $html, $mssp_id, debug_backtrace()[1]['function'] );

	#
	# only local
	} else {
		dg();
		return xmail_local( $to, $subject, $text, $from, $html );
	}
	
}








