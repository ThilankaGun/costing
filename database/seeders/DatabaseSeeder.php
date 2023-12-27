<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PaymentMethod;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::create(attributes: [
//            'name' => 'admin',
//            'email' => 'admin@admin.com',
//            'password' => bcrypt('password'),
//        ]);

        $this->call([
            CategorySeeder::class,
            PaymentMethodSeeder::class,
            UserSeeder::class,
            ExpenseSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
