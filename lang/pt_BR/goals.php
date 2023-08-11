<?php

use App\Enums\SpendTypeEnum;
use App\Enums\VisibilityStatusEnum;

return [
    'title' => 'Metas',
    'title_singular' => 'Meta',
    'actions' => [
        'deposit' => 'Depósito',
        'withdraw' => 'Retirada',
    ],
    'fields' => [
        'name' => 'Nome',
        'amount' => 'Valor',
        'target_date' => 'Data Alvo',
        'currency_code' => 'Código de Moeda',
        'color' => 'Cor',
        'wallet' => 'Carteira',
        'from_wallet' => 'De Carteira',
        'to_wallet' => 'Para Carteira',
        'goal' => 'Meta',
        'target_amount' => 'Valor Alvo',
        'balance' => 'Saldo',
        'target_from' => 'Alvo De',
        'target_until' => 'Alvo Até',
    ],
];
