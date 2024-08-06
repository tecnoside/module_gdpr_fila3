<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ConsentResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\Gdpr\Filament\Resources\ConsentResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListConsents extends ListRecords
{
    protected static string $resource = ConsentResource::class;

    public TableLayoutEnum $layoutView = TableLayoutEnum::GRID;

<<<<<<< HEAD
=======
    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
        ];
    }

    protected function getHeaderActions(): array
>>>>>>> ef8f09d (up)
    {
        return [
            TableLayoutToggleTableAction::make(),
        ];
    }

    protected function getHeaderActions(): array
            Actions\CreateAction::make(),
        ];
    }
}
