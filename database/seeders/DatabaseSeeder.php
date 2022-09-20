<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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
        \App\Models\User::factory(10)->create();

        // for factory
        Listing::factory(10)->create();
        Listing::create([
            'title'=>'Laravel Senior Developer',
            'tags'=>'Laravel, Javascript',
            'company'=>'JP Corp',
            'location'=>'Boston, MA',
            'email'=>'email1@gmail.com',
            'website'=>'https://www.acme.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Exercitationem quasi vel, tempora inventore vitae distinctio
                        velit assumenda adipisci nemo voluptatum? Provident totam repellat
                        quo deserunt laboriosam voluptatem accusantium error quisquam!',
        ]);
        Listing::create([
            'title'=>'Laravel Junior Developer',
            'tags'=>'Laravel, Javascript',
            'company'=>'JP Corp',
            'location'=>'Boston, MA',
            'email'=>'email2@gmail.com',
            'website'=>'https://www.acme.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Exercitationem quasi vel, tempora inventore vitae distinctio
                        velit assumenda adipisci nemo voluptatum? Provident totam repellat
                        quo deserunt laboriosam voluptatem accusantium error quisquam!',
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
