<?

# jalal7h@gmail.com
# 2017/05/03
# 1.1

add_action('admin_changepassword_do');

function admin_changepassword_do(){
	
	$_REQUEST['cell'] = urlencode($_REQUEST['cell']);

	if(! $user_id = admin_logged() ){
		ed();
	
	} else if(! $rw_user = table('user', $user_id) ){
		ed();
	}

	#
	# info
	if(! dbs( 'user', ['email','name','cell'], ['id'=>$user_id] ) ){
		e();
	}

	#
	# password
	if(! $password = trim($_REQUEST['password']) ){
		e();

	} else if( $password != '************' ){
		$password = md5( $password );
		dbs( 'user', ['password'=>$password], ['id'=>$user_id] );
	}

	listmaker_fileupload( 'user' , $user_id );

	?>
	<script type="text/javascript">
		top.dehitbox_do();
	</script>
	<?

}



