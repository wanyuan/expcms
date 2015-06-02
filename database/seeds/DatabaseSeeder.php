<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Model::unguard();                   //取消数据库保护，直接写入数据库
		$this->call("UserTableSeeder");
        $this->call("ArticleTableSeeder");
        $this->command->info("data is all seeded!");
	}

}

