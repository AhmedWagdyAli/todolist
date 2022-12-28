<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            "name"=>"admin",
            "email"=>"admin@email.com",
            "password"=>Hash::make("123123"),
            "is_admin"=>"yes"
        ]);
        Project::create([
            'title'=>'test',
            'user_id'=>1,
            "body"=>"this is a test",
            
        ]);
        Task::create([
            'title'=>'test',
            'user_id'=>1,
            'project_id'=>1,
            "body"=>"this is a test",
            
        ]);
      

    }
}
