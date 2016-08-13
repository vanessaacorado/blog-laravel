<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        DB::statement("SET foreign_key_checks = 0");
 		 $this->call('PostsTableSeeder');
  		 $this->call('TagTableSeeder');
  		 $this->call('CommentTableSeeder');

        Model::reguard();
    }
}
