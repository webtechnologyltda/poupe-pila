<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Uid\Ulid;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        Account::insert([
            [
                'id' => Ulid::generate(),
                'name' => 'Pessoal',
                'owner_id' => $user->id,
            ],
            [
                'id' => Ulid::generate(),
                'name' => 'Negócio',
                'owner_id' => $user->id,
            ],
            [
                'id' => Ulid::generate(),
                'name' => 'Familiar',
                'owner_id' => $user->id,
            ]
        ]);
    }
}
