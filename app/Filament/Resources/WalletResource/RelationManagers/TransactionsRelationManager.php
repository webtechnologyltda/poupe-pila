<?php

namespace App\Filament\Resources\WalletResource\RelationManagers;

use App\Filament\Resources\TransactionResource;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class TransactionsRelationManager extends RelationManager
{
    protected static string $relationship = 'walletTransactions';

    public function form(Form $form): Form
    {
        return (new TransactionResource())->form($form);
    }

    public function table(Table $table): Table
    {
        return (new TransactionResource())->table($table);
    }

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return trans('wallets.relations.walletTransactions.title');
    }

}
