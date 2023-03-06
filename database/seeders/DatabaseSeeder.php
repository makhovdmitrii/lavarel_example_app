<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('articles')->insert([
            [
                'name' => 'title 1',
                'title'  => 'post-1',
                'message'  => 'text text text 1',
                'vote' => '0',
            ],
            [
                'name' => 'title 2',
                'title'  => 'post-2',
                'message'  => 'text text text 2',
                'vote' => '0',
            ],
            [
                'name' => 'title 3',
                'title'  => 'post-3',
                'message'  => 'text text text 3',
                'vote' => '0',
            ],
        ]);
    }
}
