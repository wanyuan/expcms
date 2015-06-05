<?php namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Input;

class WelcomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | 网站首页控制器
    |--------------------------------------------------------------------------
    */

    /**
     * 构造函数
     *
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
    public function about()
    {
//        echo captcha_img();
//        Input::get('myname');

        echo trans('validation.before', ['attribute' => '日期', 'date' => Carbon::now()]);

    }


}
