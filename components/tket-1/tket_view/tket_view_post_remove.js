
jQuery(document).ready(function($) {

	if( $('.tket_view.remove_flag') ){

		ticketbox_mg_post_remove_instantly_hide = 1;

		que_key = $('.tket_view.remove_flag').attr('que_key');
		list_base = $('.tket_view.remove_flag').attr('list_base');

		// remove button
		$('body').delegate('.tket_view.remove_flag .post .remove', 'click', function() {

			rm = $(this);
			ps = rm.parent();

			if( confirm( rm.attr('text_remove') ) ){

				post_id = ps.attr('post_id');
				
				if( ticketbox_mg_post_remove_instantly_hide == 1 ){
					ps.animate({'height':'0','margin':'-10', 'opacity':'0.0'}, 100, function(){
						ps.remove();
					});
				
				} else {
					rm.css({'opacity':'0'});
					ps.css({'opacity':'0.8'});
				}


				$.ajax({
					url: _URL+"/?do_action=tket_view_post_remove&post_id="+post_id+'&que_key='+que_key

				}).done(function( html ) {

					if( html == 'OK' ){
						ps.animate({'height':'0','margin':'-10', 'opacity':'0.0'}, 200, function(){
							ps.remove();
						});
					
					} else if( html == 'NULL' ){
						location.href = list_base;

					} else {
						rm.css({'opacity':'1'});
					}

				});

			}

		});

	}

});




