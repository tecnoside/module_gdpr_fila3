<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages;

use Filament\Actions;
<<<<<<< HEAD
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\User\Filament\Resources\BaseProfileResource\Pages\ListProfiles as UserListProfiles;

class ListProfiles extends UserListProfiles
{
    protected static string $resource = ProfileResource::class;

    public TableLayoutEnum $layoutView = TableLayoutEnum::GRID;

    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
        ];
    }

=======
use Filament\Resources\Pages\ListRecords;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource;

class ListProfiles extends ListRecords
{
    protected static string $resource = ProfileResource::class;

>>>>>>> 18269eb (.)
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
