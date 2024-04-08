<?php

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages;

use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConsents extends ListRecords
{
    protected static string $resource = ConsentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
