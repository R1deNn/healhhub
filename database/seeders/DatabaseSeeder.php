<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(25)->create();

        \App\Models\Appointment::factory(15)->create();

        DB::table('users')->insert([
            'name' => 'Андрей',
            'surname' => 'Сулейков',
            'email' => fake()->unique()->safeEmail(),
            'tel' => fake()->unique()->phoneNumber(),
            'password' => Hash::make('password'),
            'rules' => 1,
            'img' => '',
            'cab' => 1,
            'remember_token' => fake()->randomLetter(10),
            'created_at' => now(),
            'updated_at' => now(),
            'permissions' => null,
            'google_id' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Антон',
            'surname' => 'Калачков',
            'email' => fake()->unique()->safeEmail(),
            'tel' => fake()->unique()->phoneNumber(),
            'password' => Hash::make('password'),
            'rules' => 1,
            'img' => '',
            'cab' => 1,
            'remember_token' => fake()->randomLetter(10),
            'created_at' => now(),
            'updated_at' => now(),
            'permissions' => null,
            'google_id' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Руслан',
            'surname' => 'Гинатуллин',
            'email' => fake()->unique()->safeEmail(),
            'tel' => fake()->unique()->phoneNumber(),
            'password' => Hash::make('password'),
            'rules' => 1,
            'img' => '',
            'cab' => 1,
            'remember_token' => fake()->randomLetter(10),
            'created_at' => now(),
            'updated_at' => now(),
            'permissions' => null,
            'google_id' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Кирилл',
            'surname' => 'Сугаков',
            'email' => fake()->unique()->safeEmail(),
            'tel' => fake()->unique()->phoneNumber(),
            'password' => Hash::make('password'),
            'rules' => 1,
            'img' => '',
            'cab' => 1,
            'remember_token' => fake()->randomLetter(10),
            'created_at' => now(),
            'updated_at' => now(),
            'permissions' => null,
            'google_id' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Артем',
            'surname' => 'Митрофанов',
            'email' => fake()->unique()->safeEmail(),
            'tel' => fake()->unique()->phoneNumber(),
            'password' => Hash::make('password'),
            'rules' => 1,
            'img' => '',
            'cab' => 1,
            'remember_token' => fake()->randomLetter(10),
            'created_at' => now(),
            'updated_at' => now(),
            'permissions' => null,
            'google_id' => null
        ]);
    }
}
