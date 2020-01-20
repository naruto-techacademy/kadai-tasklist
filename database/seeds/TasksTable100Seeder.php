<?php

use Illuminate\Database\Seeder;

class TasksTable100Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <=100; $i++){
            DB::table('tasks')->insert([
                'status' => 'testst' . $i,
                'content' => 'testcontent' . $i
            ]);
        } 
    }
}
