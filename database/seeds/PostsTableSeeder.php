<?php

use Illuminate\Database\Seeder;
use App\Posts;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		   Posts::truncate();
        factory('App\Posts', 15)->create();
    }
}
