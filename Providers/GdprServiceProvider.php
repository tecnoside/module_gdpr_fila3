<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class GdprServiceProvider extends XotBaseServiceProvider
{
    public string $module_name = 'gdpr';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot();

        // $lang_path=realpath($this->module_dir.'/../Resources/lang');

        // $this->loadTranslationsFrom($lang_path, 'cookie-consent');
    }
}
