<?

# jalal7h@gmail.com
# 2016/11/30
# 1.0

function ticketbox_user( $ticketbox_id, $user_id=null ){

	if(! $user_id ){
		if(! $user_id = admin_logged() ){
			if(! $user_id = user_logged() ){
				ed();
			}
		}
	}

	if(! $rs = dbq(" SELECT * FROM `ticketbox_user` WHERE `user_id`='$user_id' AND `ticketbox_id`='$ticketbox_id' LIMIT 1 ") ){
		e();

	} else if(! dbn($rs) ){
		dg();

	} else if(! $rw = dbf($rs) ){
		e();

	} else if(! $rs_f = dbq(" SELECT * FROM `ticketbox_user` WHERE `user_id`!='$user_id' AND `ticketbox_id`='$ticketbox_id' LIMIT 1 ") ){
		e();

	} else if(! dbn($rs_f) ){
		dg();

	} else if(! $rw_f = dbf($rs_f) ){
		dg();

	} else {
		$rw['foreign'] = $rw_f['user_id'];
		return $rw;
	}

	return false;

}









