<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
<<<<<<< HEAD
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
=======
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource;
>>>>>>> 18269eb (.)

class ListConsents extends ListRecords
{
    protected static string $resource = ConsentResource::class;

<<<<<<< HEAD
    public TableLayoutEnum $layoutView = TableLayoutEnum::GRID;

    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
        ];
    }

=======
>>>>>>> 18269eb (.)
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
<<<<<<< HEAD

    public function table(Table $table): Table
    {
        return $table
            ->columns([
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
            ]);
    }
=======
>>>>>>> 18269eb (.)
}
