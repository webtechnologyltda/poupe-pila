<?php

namespace Database\Seeders;

use App\Enums\SpendTypeEnum;
use App\Models\Account;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Contas',
                'type' => SpendTypeEnum::EXPENSE->value,
                'color' => '#22b3e0',
                'icon' => 'receipt',
            ],
            [
                'name' => 'Comida',
                'type' => SpendTypeEnum::EXPENSE->value,
                'color' => '#224ce0',
                'icon' => 'lucide-utensils',
            ],
            [
                'name' => 'Transporte',
                'type' => SpendTypeEnum::EXPENSE->value,
                'color' => '#e07222',
                'icon' => 'lucide-bus',
            ],
            [
                'name' => 'Compras',
                'type' => SpendTypeEnum::EXPENSE->value,
                'color' => '#22a1e0',
                'icon' => 'lucide-shirt',
            ],
            [
                'name' => 'Entreterimento',
                'type' => SpendTypeEnum::EXPENSE->value,
                'color' => '#e02222',
                'icon' => 'lucide-gamepad-2',
            ],
            [
                'name' => 'Saúde',
                'type' => SpendTypeEnum::EXPENSE->value,
                'color' => '#22e0b3',
                'icon' => 'lucide-stethoscope',
            ],
            [
                'name' => 'Educação',
                'type' => SpendTypeEnum::EXPENSE->value,
                'color' => '#e0b322',
                'icon' => 'lucide-graduation-cap',
            ],
            [
                'name' => 'Presentes',
                'type' => SpendTypeEnum::EXPENSE->value,
                'color' => '#22e0b3',
                'icon' => 'lucide-gift',
            ],
            [
                'name' => 'Salário',
                'type' => SpendTypeEnum::INCOME->value,
                'color' => '#e0b322',
                'icon' => 'lucide-banknote',
            ],
            [
                'name' => 'Negócios',
                'type' => SpendTypeEnum::INCOME->value,
                'color' => '#2279e0',
                'icon' => 'lucide-building-2',
            ],
            [
                'name' => 'Renda Extra',
                'type' => SpendTypeEnum::INCOME->value,
                'color' => '#e0b322',
                'icon' => 'lucide-coins',
            ],
        ];

        $accounts = Account::all();

        foreach ($accounts as $key => $account) {
            foreach ($categories as $category) {
                $category['account_id'] = $account->id;
                Category::create($category);
            }
        }

    }
}
