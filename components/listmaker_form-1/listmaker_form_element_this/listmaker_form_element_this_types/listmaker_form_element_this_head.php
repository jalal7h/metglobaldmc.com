<?

# jalal7h@gmail.com
# 2017/02/11
# 1.0

function listmaker_form_element_this_head( $info ){
		
	$table = $info['formTable'];

	if(! $lmtc = lmtc($table) ){
		return '';

	} else {
		$tableName = $lmtc[0];
	}

	if( $GLOBALS['listmaker_form-rw'] ){
		$text = __( 'ویرایش %%', [$tableName] );
	
	} else {
		$text = __( 'ثبت %% جدید', [$tableName] );
	}

	return "<div class=\"lmf_head\">$text</div>";
	
}



