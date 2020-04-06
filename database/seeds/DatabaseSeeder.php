<?php

use App\Question;
use App\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Question::class, 10000)->create();
        factory(Task::class, 10000)->create();
    }
}
