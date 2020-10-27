<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // User::create(
        //     [
        //         'name' => Str::random(10),
        //         'email'=> Str::random(10).'gmail.com',
        //         'password'=> Hash::make('password')
        //     ]
        //     );
        $users = factory(User::class, 10)->create();

    }
}
