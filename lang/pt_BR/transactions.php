<?php

use App\Enums\SpendTypeEnum;
use App\Enums\TransactionTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Transações',
    'title_singular' => 'Transação',
    'fields' => [
        'amount' => 'Valor',
        'confirmed' => 'Confirmado',
        'category' => 'Categoria',
        'account' => 'Conta',
        'happened_at' => 'Data',
        'description' => 'Descrição',
        'type' => 'Tipo',
        'wallet' => 'Carteira',
        'from_wallet' => 'Da Carteira',
        'to_wallet' => 'Para a Carteira',
        'note' => 'Observação',
        'attachment' => 'Anexo',
    ],
    'types' => [
        TransactionTypeEnum::DEPOSIT->value   => [
            'id' => TransactionTypeEnum::DEPOSIT->value,
            'label' => 'Depósito',
            'description' => 'Depósito na sua carteira',
        ],
        TransactionTypeEnum::WITHDRAW->value  => [
            'id' => TransactionTypeEnum::WITHDRAW->value,
            'label' => 'Retirada',
            'description' => 'Retirada da sua carteira',
        ],
        TransactionTypeEnum::TRANSFER->value  => [
            'id' => TransactionTypeEnum::TRANSFER->value,
            'label' => 'Transferência',
            'description' => 'Transferência entre suas carteiras',
        ],
        TransactionTypeEnum::PAYMENT->value  => [
            'id' => TransactionTypeEnum::PAYMENT->value,
            'label' => 'Pagamento',
            'description' => 'Pagamento de uma carteira para outra carteira',
        ],
    ]
];
