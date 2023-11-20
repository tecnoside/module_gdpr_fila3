<?php

namespace Modules\Gdpr\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class GdprServiceProvider extends XotBaseServiceProvider
{
    public string $module_name = 'gdpr';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
}
