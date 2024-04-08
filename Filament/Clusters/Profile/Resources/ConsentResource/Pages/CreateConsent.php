<?php

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages;

use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateConsent extends CreateRecord
{
    protected static string $resource = ConsentResource::class;
}
