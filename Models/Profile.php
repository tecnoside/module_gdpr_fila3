<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

use Modules\User\Models\BaseProfile as UserBaseProfile;

class Profile extends UserBaseProfile
{
    /** @var string */
    protected $connection = 'gdpr';
}
