<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 7405a7d4 (first)
namespace Modules\Gdpr\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class GdprServiceProvider extends XotBaseServiceProvider
{
    public string $module_name = 'gdpr';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
}
