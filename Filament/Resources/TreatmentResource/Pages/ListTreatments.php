<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\TreatmentResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\Gdpr\Filament\Resources\TreatmentResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListTreatments extends ListRecords
{
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $resource = TreatmentResource::class;

    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
