<?php

declare(strict_types=1);

/**
 * @see https://github.com/aymanalhattami/filament-page-with-sidebar
 */

namespace Modules\Gdpr\Filament\Pages;

use AymanAlhattami\FilamentPageWithSidebar\FilamentPageSidebar;
use AymanAlhattami\FilamentPageWithSidebar\PageNavigationItem;
use AymanAlhattami\FilamentPageWithSidebar\Traits\HasPageSidebar;
use Filament\Pages\Page;
use Modules\Gdpr\Filament\Resources\ProfileResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class ProfilePage extends Page
{
    use HasPageSidebar;
    use NavigationLabelTrait;

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }

    public function getView(): string
    {
        return 'gdpr::filament.pages.profile';
    }

    public static function sidebar(): FilamentPageSidebar
    {
        return FilamentPageSidebar::make()
            ->sidebarNavigation()
            ->setTitle('Application Settings')
            ->setDescription('general, admin, website, sms, payments, notifications, shipping')
            ->setNavigationItems([
                PageNavigationItem::make('General Settings')
                    ->translateLabel()
                    ->icon('heroicon-o-cog-6-tooth')
                    /*
                    ->url(GeneralSettings::getUrl())
                    ->isActiveWhen(function () {
                        return request()->routeIs(GeneralSettings::getRouteName());
                    })
                    */
                    ->visible(true),
                PageNavigationItem::make('Admin Panel Settings')
                    ->translateLabel()
                    ->icon('heroicon-o-cog-6-tooth')
                    /*
                    ->url(AdminPanelSettings::getUrl())
                    ->isActiveWhen(function () {
                        return request()->routeIs(AdminPanelSettings::getRouteName());
                    })
                    */
                    ->visible(true),
                PageNavigationItem::make('Web Settings')
                    ->translateLabel()
                    ->icon('heroicon-o-cog-6-tooth')

                    ->url(ProfileResource::getUrl('index'))
                    /*
                    ->isActiveWhen(function () {
                        return request()->routeIs(ProfileResource::getRouteName());
                    })
                    */

                    ->visible(true),
                // ...
            ]);
    }
}
