<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Goal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goal::insert([
            [
                'name' => 'Comprar um carro novo',
                'amount' => 80000,
                'target_date' => now()->addYears(2),
                'account_id' => Account::first()->id,
                'color' => '#22b3e0',
                'currency_code' => 'BRL',
            ],
            [
                'name' => 'Comprar uma casa nova',
                'amount' => 300000,
                'target_date' => now()->addYears(5),
                'account_id' => Account::first()->id,
                'color' => '#224ce0',
                'currency_code' => 'BRL',
            ],
            [
                'name' => 'Comprar um novo computador',
                'amount' => 8000,
                'target_date' => now()->addMonths(6),
                'account_id' => Account::first()->id,
                'color' => '#e07222',
                'currency_code' => 'BRL',
            ],
            [
                'name' => 'Comprar um celular novo',
                'amount' => 5000,
                'target_date' => now()->addMonths(3),
                'account_id' => Account::first()->id,
                'color' => '#22a1e0',
                'currency_code' => 'BRL',
            ],
        ]);
    }
}
