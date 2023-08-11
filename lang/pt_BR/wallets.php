<?php

use App\Enums\WalletTypeEnum;

return [
    'title' => 'Carteiras',
    'title_singular' => 'Carteira',
    'fields' => [
        'name' => 'Nome',
        'type' => 'Tipo',
        'balance' => 'Saldo',
        'initial_balance' => 'Saldo Inicial',
        'credit_limit' => 'Limite de Crédito',
        'total_due' => 'Total Atual Devido',
        'currency_code' => 'Moeda',
        'description' => 'Descrição',
        'statement_day_of_month' => 'Dia do Extrato',
        'payment_due_day_of_month' => 'Dia de Vencimento do Pagamento',
        'icon' => 'Ícone',
        'color' => 'Cor',
        'exclude' => [
            'title' => 'Não Incluir no Saldo Total',
            'help_text' => 'Ignorar este saldo da carteira no cálculo do saldo total',
        ]
    ],
    'types' => [
        WalletTypeEnum::GENERAL->value => 'Geral',
        WalletTypeEnum::CREDIT_CARD->value => 'Cartão de Crédito',
    ],
    'relations' => [
        'walletTransactions' => [
            'title' => 'Transações da Carteira',
        ]
    ]
];
