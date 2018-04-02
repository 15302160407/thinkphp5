<?php
namespace app\index\controller;
use app\common\model\Teacher;
use think\Controller;
class TeacherController extends Controller{
	public function index()
	{
		//静态调用get()
		dump(Teacher::get(1)->getdata());
		echo "<hr>";


		//实例化调用get()
		$teacher2=new Teacher();
		$teacher2_1=$teacher2->get(3);
		//判断数据是否存在，存在就显示，不存在显示no
		if($teacher2_1){
		dump($teacher2_1->getdata());
		}
		else{
			echo "no";
		}
		echo "<hr>";


		//助手函数调用get()
		$teacher1=model('Teacher');
		$data1=['name'=>'李四','sex'=>0];
		$teacher1_1=$teacher1->get($data1);
		dump($teacher1_1->getdata());
		echo "<hr>";


		//find()
		//$data查询条件
		$data2=[
				'sex'=>0,
				'name'=>'张三'
				];
		$teacher1_2=$teacher1->where($data2)->find()->getdata();
		dump($teacher1_2);
		echo "<hr>";

		// 根据主键获取多个数据
		$list = Teacher::all([1,2,3]);
		foreach($list as $key=>$user){
    	dump($user->name);
}
}


	public function hi()
	{
	// 使用助手函数`model`	
	//$teacher=model('Teacher'); 
	
	// 实例化模型
	// use app\common\model\Teacher;
	//$Teacher =new Teacher();

	// 静态调用
	// use app\common\model\Teacher;
	//Teacher::get(1);


	}
	public function add(){
		return $this->fetch();
	}

}