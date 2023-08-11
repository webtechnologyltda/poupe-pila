<?php

use App\Enums\DebtActionTypeEnum;
use App\Enums\DebtTypeEnum;

return [
    'title' => 'Dívidas',
    'title_singular' => 'Dívida',
    'actions' => [
        'debt_transaction' => 'Transação de Dívida',
    ],
    'fields' => [
        'name' => 'Nome',
        'type' => 'Tipo',
        'amount' => 'Valor',
        'description' => 'Descrição',
        'start_at' => 'Início',
        'color' => 'Cor',
        'wallet' => 'Carteira',
        'initial_wallet' => 'Carteira Inicial',
        'happened_at' => 'Ocorreu em',
        'debt' => 'Dívida',
        'action_type' => 'Tipo de Ação',
        'from_wallet' => 'De Carteira',
        'total_debt_amount' => 'Total da Dívida',
    ],
    'types' => [
        DebtTypeEnum::PAYABLE->value => 'Pagável',
        DebtTypeEnum::RECEIVABLE->value => 'Recebível',
    ],
    'action_types' => [
        DebtTypeEnum::RECEIVABLE->value => [
            DebtActionTypeEnum::DEBT_COLLECTION->value => 'Cobrança de Dívida',
            DebtActionTypeEnum::LOAN_INCREASE->value   => 'Aumento de Empréstimo',
            DebtActionTypeEnum::LOAN_INTEREST->value   => 'Juros',
        ],
        DebtTypeEnum::PAYABLE->value => [
            DebtActionTypeEnum::REPAYMENT->value     => 'Pagamento',
            DebtActionTypeEnum::DEBT_INCREASE->value => 'Aumento de Dívida',
            DebtActionTypeEnum::DEBT_INTEREST->value => 'Juros',
        ],
    ]
];
