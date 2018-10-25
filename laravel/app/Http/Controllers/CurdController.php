<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;
/**
* 
*/
class CurdController extends Controller
{
	//新增数据显示页面
	public function index()
	{
		return view('curd\insert');
	}
	//新增数据
	public function insert()
	{
		$res = DB::table('jy_user')->insert([
			'username'=>$_POST['username'],
			'telphone'=>$_POST['telphone'],
			'email'=>$_POST['email']
		]);
		if ($res) {
			return redirect('/show');
		}
	}
	//查询所有数据
	public function show()
	{
		 
		$res = DB::table('jy_user')->orderBy('id','asc')->get();
		return view('curd\show',['list'=>$res]);
	}

	public function del()
	{
		$res = DB::table('jy_user')->delete($_GET['id']);
		if ($res) {
			return redirect('/show');
		}
	}
	public function first()
	{
		$res = DB::table('jy_user')->where('id',$_GET['id'])->first();
		return view('curd\update',['list'=>$res]);
	}
	public function update()
	{
		$res = DB::table('jy_user')->where('id',$_GET['id'])->update([
			'username'=>$_POST['username'],
			'telphone'=>$_POST['telphone'],
			'email'=>$_POST['email']
		]);
		return redirect('/show');
	}
}