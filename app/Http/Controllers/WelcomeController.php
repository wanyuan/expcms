<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| 网站首页控制器
	|--------------------------------------------------------------------------
	*/

	/**
	 * 构造函数
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * 网站首页展示
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');

	}

    /**
     * 关于我们介绍
     */
    public function about(){
        echo url("/home");

    }



}
