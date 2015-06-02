<?php
/**
 * Created by PhpStorm.
 * User: wanyuan
 * Date: 2015/4/23
 * Time: 20:43
 */
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder{

    public  function  run(){
        DB::table("users")->delete();
        User::create(['name'=>'admin', 'email'=>'admin@admin.com', 'password'=>bcrypt('admin')]);
    }

}