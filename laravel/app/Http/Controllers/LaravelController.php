<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models;

/**
* 
*/
class LaravelController extends Controller
{
	
	public function userinfo()
	{
		$list = Models::index();
		return view('laravel\show',['list'=>$list]);
	}
	//原生
	public function userinfo1()
	{
		//查询所有数据
		/*
		$res = DB::select("select * from jy_user");
		dd($res);
		*/
		//添加单条数据
		/*
		$res = DB::insert("insert into jy_user(username) values('陈晶')");
		var_dump($res);
		*/
		//删除单条数据
		/*
		$res = DB::delete("delete from jy_user where id=31");
		var_dump($res);
		*/
		//修改数据
		$res = DB::update("update jy_user set username='陈晶' where id=28");
		var_dump($res);
	}
	//DB类操作数据库
	public function userinfo2()
	{
		//查询多条数据
		/*
		$res = DB::table('jy_user')->get();
		dd($res);
		*/
		//查询单条数据
		/*
		$res = DB::table('jy_user')->where('id','28')->first();
		print_r($res);
		*/
		//查询符合条件的数据
		/*
		$res = DB::table('jy_user')->where('id','>','28')->get();
		print_r($res);
		*/
		//添加数据
		/*
		$array = ['username'=>'陈晶','telphone'=>'18513379589'];
		$res = DB::table('jy_user')->insert($array);
		print_r($res);
		*/
		//删除数据
		/*
		$res = DB::table('jy_user')->where('id',28)->delete();
		var_dump($res);
		*/
		//修改数据
		$res = DB::table('jy_user')->where('id',32)->update(array(
			'username'=>'cj',
			'telphone'=>'1234567'
		));
		var_dump($res);
	}

}