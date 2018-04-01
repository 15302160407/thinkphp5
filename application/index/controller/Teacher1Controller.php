<?php
namespace app\index\controller;
use app\common\model\Teacher;
use think\Controller;
class Teacher1Controller extends controller{
	public function index(){
	// $teacher1=new Teacher();
	// $teacher1_1=$teacher1->where("sex",0)
	// 						->limit(2)
	// 						->order("id","desc")
	// 					    ->select();
	// dump($teacher1_1);




	//表示调用当前控制器下面的index模板
	//return $this->fetch('index');


	//表示调用index控制器下面的index模板。
	//return $this->fetch('index/index');
	

	//跨模块渲染模板
	//return $this->fetch('test@test/test');
	

	//传值
	/*$this->assign('name','zhangsan');
	$this->assign('age',18);*/

	$deta=([
			'name'=>'lisi',
			'age'=>20]);
	// $this->assign([
	// 				'name'=>'lisi',
	// 				'age'=>20]);
	/*return $this->fetch("index",[
			'name'=>'lisi',
			'age'=>20]);*/
			return $this->display('{$name}---{$age}',[
			'name'=>'lisi',
			'age'=>20]);
		}
	
}
?>