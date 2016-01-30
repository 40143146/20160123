<?php

// use App\Models\Post;
use App\Post;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//先把資料清空
    	Post::truncate();

    	// $faker = Factory::create();
    	//顯示出中文但只有部分有中文資料的才可以顯示出來例如title
    	$faker = Factory::create('zh_TW');

    	//倒資料進去
    	foreach (range(10,1) as $number) {
    		Post::create([
        	// 'title' => 'fake tittle '.$number,
    		'title' => $faker->title,
        	// 'sub_title' => 'fake sub_tittle '.$number,
        	// 'content' => 'fake content',
        	'content' => $faker->paragraph,
        	// 'is_feature' => false,
        	'is_feature' => rand(0,1),
        	// 'page_view' => 0,
        	'page_view' => rand(0,500),

        	'created_at' => Carbon::now()->subDays($number),
        	'updated_at' => Carbon::now()->subDays($number),

        	]);
    	}        
    }
}
