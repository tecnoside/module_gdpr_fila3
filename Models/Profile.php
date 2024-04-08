<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

// use Modules\User\Models\BaseProfile;

class Profile extends BaseModel
{
    /** @var string */
    protected $connection = 'gdpr';
}
