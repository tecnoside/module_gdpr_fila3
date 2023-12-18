<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Gdpr\Providers\Filament;

use Modules\Xot\Providers\Filament\XotBasePanelProvider;
=======
=======
>>>>>>> f2b93dcd (.)
namespace Modules\Gdpr\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
<<<<<<< HEAD
>>>>>>> f2b93dcd (.)
=======
>>>>>>> f2b93dcd (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Gdpr';
<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> f2b93dcd (.)
=======


>>>>>>> f2b93dcd (.)
}
