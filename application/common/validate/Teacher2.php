<?php
namespace app\common\validate;
use think\Validate;
class Teacher2 extends Validate{
	//验证规则
	protected $rule=[
		['name','require|max:30',"name不能为空|name长度小于30个字符串"],
		['email','email','email必须为正确的email格式'],
		['username','require|max:16',"username不能为空|username长度小于16个字符串"],
		['password','require|max:40',"password不能为空|password长度小于40个字符串"]	,
		['sex','between:0,1','性别只能选择1或0']
	];
	//验证场景
	protected $scene=[
		'update'=>['name','password'],
		'add'=>['name','password','username','email','sex']
	];
	

}
?>