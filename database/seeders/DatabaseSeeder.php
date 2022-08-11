<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'Bilyour Technology',
            'email' => 'saara@hotmail.com',
            'password' => '123123'

        ]);
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        // Listing::create([
        //     'title' => 'Laravel Senior developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Quebec, QC',
        //     'email' => 'email@hotmail.com',
        //     'website' => 'www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae quis culpa vitae ad officiis quia dolor numquam, quam iure maiores similique corporis voluptatibus. Recusandae obcaecati repellendus quasi in doloribus.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'tellus',
        //     'location' => 'Montreal, QC',
        //     'email' => 'tellus@hotmail.com',
        //     'website' => 'tellus.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae quis culpa vitae ad officiis quia dolor numquam, quam iure maiores similique corporis voluptatibus. Recusandae obcaecati repellendus quasi in doloribus.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
