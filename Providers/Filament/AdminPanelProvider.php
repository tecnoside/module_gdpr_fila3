<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers\Filament;

<<<<<<< HEAD
=======
use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
>>>>>>> origin/dev
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Gdpr';
<<<<<<< HEAD
=======

    public function panel(Panel $panel): Panel
    {
        FilamentAsset::register([
            Css::make('gdpr-styles', asset('/vendor/cookie-consent/css/cookie-consent.css')),
            // Js::make('gdpr-scripts', __DIR__.'/../../Resources/dist/assets/app2.js'),
        ], 'gdpr');

        return parent::panel($panel);
    }
>>>>>>> origin/dev
}
