<?

# taghipoor.meysam@gmail.com
# 2016/11/27
# 1.0

function news_mg_saveNew(){
	
	#
	# insert
	$id = dbs( 'news', ['name','cat','text','pic'] );
	#
 
	#
	# upload photo
	listmaker_fileupload( 'news', $id, "*" );
	#


	
}

