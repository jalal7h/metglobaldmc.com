<?

# taghipoor.meysam@gmail.com
# 2016/11/27
# 1.0

function bookmarky_user_list(){	
	
	#
	# action
	switch ($_REQUEST['do1']) {
		
		case 'remove':
			bookmarky_user_remove();
			break;
	}

	#
	# list

	$list['name'] = __FUNCTION__;
	$list['query'] = " SELECT * FROM `bookmarky` WHERE `user_id`='".$_SESSION['uid']."' ORDER BY  `id` ASC";
	$list['tdd'] = 10;

	#
	# base url is needed in version upper 1.2 
	# ** address base e in list
	$list['base_url'] = '"./?page='.$_REQUEST['page'].'&do=bookmarky_user_list"';

	#
	# actions 
	# ** mitunim link ham bedim bejaye 'true'
	# ** ama age base_url ro dashte bashim az hamun estefade mikone
	#
	
	$list['addnew_url'] = false;
	$list['remove_url'] = true; // link dokme hazf
	
	$list['list_array'] = array (
		array("content" => 'table_name($rw)'),
		array("content" => 'bookmarky_name($rw)'),
	);
	
	#
	# paging select
	if( dbn( dbq($list['query']) ) > 0 ){
		$i=0;
		if(! $rs = dbq(" SELECT DISTINCT `table_name` FROM `bookmarky` WHERE 1") ){
			e();

		} else if(! dbn($rs) ){
			e();

		} else while( $rw = dbf($rs) ){
			if(! $table_title = lmtc($rw['table_name'])[0] ){
				$table_title = $rw['table_name'];
			}
			$option_list.= "<option value=\"".$rw['table_name']."\">".$table_title."</option>";
			#
			# meghdar dadan be araye search
			$search[$i] = $rw['table_name']."(table_id)[name]";
			$i++;

		}
		$list['paging_select']['table_name'] = "<option value=''>".__('بخش')."</option>".$option_list;
	}
	
	$list['search'] = $search;
 
	$content = listmaker_list($list);

    layout_post_box( __('FAVORITES'), $content, $allow_eval=false, $framed=1 );
}

#
#name item
function bookmarky_name( $rw ){

	return " : &nbsp;&nbsp;".table( $rw['table_name'], $rw['table_id'] ,"name");
}

#
#name farsi table
function table_name($rw){
	
	return lmtc($rw['table_name'])[0];
}

