<?
$GLOBALS['cmp']['faq_mg'] = 'سوالات متداول';

function faq_mg(){

	$url = "./?page=admin&cp=".$_REQUEST['cp'];
	$menu = array(
		$_REQUEST['cp']."_list" => __("لیست سوالات"),
		$_REQUEST['cp']."_form" => __("ثبت سوال جدید"),
	);
	
	listmaker_tabmenu($menu,$url);
	
}

