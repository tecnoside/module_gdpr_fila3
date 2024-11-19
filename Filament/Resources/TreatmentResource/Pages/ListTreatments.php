<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\TreatmentResource\Pages;

use Filament\Actions;
use Modules\Gdpr\Filament\Resources\TreatmentResource;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListTreatments extends XotBaseListRecords
{
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
