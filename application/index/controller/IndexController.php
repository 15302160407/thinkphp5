<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
class IndexController  extends Controller
{
    public function index(Request $request)
    {
    	dump($request);
    }
}

