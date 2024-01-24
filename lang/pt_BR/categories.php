<?php

use App\Enums\SpendTypeEnum;

return [
    'title' => 'Categorias',
    'title_singular' => 'Categoria',
    'top_category_transactions' => 'Top Transações por Categoria',
    'fields' => [
        'name' => 'Nome',
        'type' => 'Tipo',
        'icon' => 'Ícone',
        'color' => 'Cor',
        'monthly_balance' => 'Saldo Mensal',
        'total' => 'Total',
        'is_visible' => 'É Visível?',
        'is_visible_help_text' => 'Ignorar esta categoria no saldo total e não exibir na lista de transações',
    ],
    'types' => [
        SpendTypeEnum::INCOME->value   => [
            'id' => SpendTypeEnum::INCOME->value,
            'label' => 'Receita',
            'description' => 'sua categoria de receita',
        ],
        SpendTypeEnum::EXPENSE->value   => [
            'id' => SpendTypeEnum::EXPENSE->value,
            'label' => 'Despesa',
            'description' => 'sua categoria de despesa',
        ],
    ]
];
