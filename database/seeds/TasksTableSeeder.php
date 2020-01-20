<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'status' => 'test1 ',
            'content' => 'test content1'
        ]);
        DB::table('tasks')->insert([
            'status' => 'test2',
            'content' => 'test content2'
        ]);
        DB::table('tasks')->insert([
            'status' => 'test3',
            'content' => 'test content3'
        ]);
    }
}
