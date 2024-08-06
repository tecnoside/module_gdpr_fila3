<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Treatment extends BaseModel
{
    use HasUuids;

    protected $fillable = [''];

    // protected $table = 'treatment';
    public $incrementing = false;
}
