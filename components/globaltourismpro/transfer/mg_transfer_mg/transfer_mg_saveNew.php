<?php

# jalal7h@gmail.com
# 2017/07/31
# 1.3

function transfer_mg_saveNew(){

    #
    # update the database
    $id = dbs( 'mg_transfer', ['name','position_id','transferBasis_id','drivernumber','tariff','date_from','date_to','deathline','reservation','itinerary','conditions','notes','flag'=>1, 'owner'=>admin_logged()] );

	# 
	# set kword
	kwordusage_set( $_REQUEST['kword'], "mg_transfer", $id );

    #
    # set price
    mg_priceform_save( 'mg_transfer:' . $id );

    #
    # take care of files
    listmaker_fileupload( 'mg_transfer', $id );
    #

}


