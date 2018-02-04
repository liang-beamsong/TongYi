<?php

/**
 * 前台导航遍历
 *
 */
function NavigationCall()
{
	return DB::table('ty_nav')->get();
}

/**
 * 前台logo遍历
 *
 */
function ReadLogo()
{
	return DB::table('ty_config')->where('id',1)->first();
}
