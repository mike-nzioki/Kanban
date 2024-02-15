<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Mike Nzioki',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->callWith(BoardSeeder::class, [ 'userId' => $user->id ]);
    }
}
