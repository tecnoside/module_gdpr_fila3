<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ProfileResource\Pages;

use AymanAlhattami\FilamentPageWithSidebar\Traits\HasPageSidebar;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\Gdpr\Filament\Resources\ProfileResource;
use Modules\Gdpr\Models\Profile;

class ListProfiles extends ListRecords
{
    // use HasPageSidebar;

    protected static string $resource = ProfileResource::class;

    // public Profile $record; // public User $record;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
