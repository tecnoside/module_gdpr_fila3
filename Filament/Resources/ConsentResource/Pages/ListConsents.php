<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ConsentResource\Pages;

use Filament\Actions;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Resources\Pages\ListRecords;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\Gdpr\Filament\Resources\ConsentResource;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListConsents extends XotBaseListRecords
{
    
    protected static string $resource = ConsentResource::class;

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
