<?

# jalal7h@gmail.com
# 2016/11/29
# 1.0

function fbcomment_list_this( $table_name , $table_id , $rw ){
	
	$c = '
	<a name="comment-'.$rw['id'].'"></a>
	<div>
	<div class="r">'.
		
		( is_component('useravatar') ? useravatar( $rw['user_id'] , $text_flag=true , $link_flag=true , $job_flag=true , $where_flag=true ) : '' ).'
		
		<div class="date">'.time_inword( $rw['date_created'] ).'</div>
		
		<div class="text">'.$rw['text'].'</div>
		
		<div class="links">
			
			'.( is_component('upvote') ? upvote_form("fbcomment",$rw['id']) : '').'
			
			'.( user_logged() ? '<a class="reply" href="#" onclick="return fbcomment_subCommentVisible( this )">'.__('پاسخ').'</a>' :'' ).
			
			( setting('fbcomment_share_on_twitter') == 1 ? "<a class=\"tweet twitter_popup\" href=\"http://twitter.com/share?text=".urlencode($rw['text'])."&url="._URL._URI.urlencode("#comment-".$rw['id'])."\">".__('توئیت')."</a>" : '').

			( (is_component('abusereport') and $rw['user_id']!=user_logged()) ? '<a '.abusereport( 'fbcomment', $rw['id'] ).' >'.__('گزارش تخلف').'</a>' : '' ).

			'
		</div>

	</div>';
	
	$c.= fbcomment( $table_name , $table_id , $comment_id=$rw['id'], $page_id=0 );
	$c.= "</div>";
	
	return $c;

}


