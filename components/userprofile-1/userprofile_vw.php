<?

# jalal7h@gmail.com
# 2017/01/29
# 1.2

add_layer( 'userprofile_vw', 'پروفایل کاربر' );

function userprofile_vw(){
	
	if(! $id = $_REQUEST['id'] ){
		e();
	
	} else if(! $rw = table("user", $id)){
		echo "<script> location.href='"._URL."/404.php';</script>";
		die();

	} else {
		if( file_exists($rw['profile_pic']) ){
			$size = getimagesize( $rw['profile_pic'] );
			$rw['profile_pic_width'] = $size[0];
			$rw['profile_pic_height'] = $size[1];
		} else {
			
			$rw['profile_pic_hide_style'] = '
			<style>
			.userprofile_vw .avatar {
				display: none;
			}
			.userprofile_vw .detail {
				width: 100%;
				border-left: 0px
			}
			</style>';



		}
		echo template_engine( 'userprofile_vw', $rw );
	}
}

