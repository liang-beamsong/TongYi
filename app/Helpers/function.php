<?php

/**
 * 前台导航遍历
 */
function NavigationCall()
{
	return DB::table('ty_nav')->limit(6)->get();
}

/**
 * 底部导航遍历
 */
function BottomNavigation()
{
	return DB::table('ty_nav')->get();
}

/**
 * 前台logo遍历
 */
function ReadLogo()
{
	return DB::table('ty_config')->where('id',1)->first();
}

/**
 * 友情链接遍历
 */
function ReadLinks()
{
	return DB::table('ty_links')->get();
}

/**
 * 名称区分
 */
function PathName($name)
{

	// $name == 'articles' ? return '童翼课程' : $name == 'dynamics' ? return '童翼动态' : $name == 'activitys' ? return '童翼活动' : $name == 'advantages' ? return '童翼优势' : $name == 'partners' ? return '合作伙伴' : return '童翼';
	if($name == 'articles'){
		return '童翼课程'; 
	}else if($name == 'dynamics'){
		return '童翼动态';
	}else if($name == 'activitys'){
		return '童翼活动';
	}else if($name == 'advantages'){
		return '童翼优势';
	}else if($name == 'partners'){
		return '合作伙伴';
	}
}

