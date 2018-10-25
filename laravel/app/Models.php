<?php
namespace App;
use Illuminate\Support\Facades\DB;
/**
* 
*/
class Models
{
	public static function index()
	{
		$data = DB::table('jy_user')->get();
		return $data;
	}
}