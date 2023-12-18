<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d18e021f (.)
=======
>>>>>>> 8830132c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fd631f4c (rebase 30)
>>>>>>> 658634fb (rebase 18)
declare(strict_types=1);

namespace Modules\Gdpr\Providers\Filament;

use Modules\Xot\Providers\Filament\XotBasePanelProvider;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 658634fb (rebase 18)
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
<<<<<<< HEAD
=======
>>>>>>> d18e021f (.)
=======
>>>>>>> 8830132c (.)
=======
>>>>>>> fd631f4c (rebase 30)
>>>>>>> 658634fb (rebase 18)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Gdpr';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 658634fb (rebase 18)
<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> f2b93dcd (.)
=======


>>>>>>> f2b93dcd (.)
<<<<<<< HEAD
=======
>>>>>>> d18e021f (.)
=======
>>>>>>> 8830132c (.)
=======
>>>>>>> fd631f4c (rebase 30)
>>>>>>> 658634fb (rebase 18)
}
