<?php

namespace Database\Seeders;

use App\Enums\WalletTypeEnum;
use App\Models\Account;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wallets = [
            [
                'name' => 'Dinheiro',
                'type' => WalletTypeEnum::GENERAL->value,
                'currency_code' => 'BRL',
                'color' => '#22b3e0',
            ],
            [
                'name' => 'Banco',
                'type' => WalletTypeEnum::GENERAL->value,
                'currency_code' => 'BRL',
                'color' => '#224ce0'
            ],
            [
                'name' => 'Carteira Digital',
                'type' => WalletTypeEnum::GENERAL->value,
                'currency_code' => 'BRL',
                'color' => '#e07222'
            ],
            [
                'name' => 'Cartão de Crédito',
                'type' => WalletTypeEnum::CREDIT_CARD->value,
                'currency_code' => 'BRL',
                'color' => '#22a1e0'
            ]
        ];

        $accounts = Account::all();
        $user = User::first();

        foreach ($accounts as $key => $account) {
            foreach ($wallets as $wallet) {
                if($key != 0 && $wallet['type'] == WalletTypeEnum::CREDIT_CARD->value) {
                    continue;
                }

                $wallet['account_id'] = $account->id;
                $wallet['slug'] = strtolower($wallet['name']) . ($key != 0 ? '-' . ($key+1) : '');
                $user->createWallet($wallet);
            }
        }
    }
}
