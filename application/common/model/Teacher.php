<?php 
namespace app\common\model;
use think\Model;
class Teacher extends Model{
	public function getAllTeacher(){
	$data=[];
	$order=['sex'=>'desc','id'=>'desc'];
	return $this->where($data)
				->order($order)
				->paginate(1);
			}
	}
 ?>
