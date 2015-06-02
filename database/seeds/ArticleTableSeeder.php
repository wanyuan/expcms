<?php
/**
 * Created by PhpStorm.
 * User: wanyuan
 * Date: 2015/4/23
 * Time: 22:21
 */

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleTableSeeder extends Seeder{

    public  function run(){
        DB::table('articles')->delete();

        for ($i=0; $i < 10; $i++) {
            Article::create([
                'title'             => 'Title '.$i,
                'description'       => 'description'.$i,
                'content'           => 'Body '.$i,
                'uid'               => 1,
            ]);
        }
    }

}