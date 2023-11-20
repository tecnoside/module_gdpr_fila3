<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

/**
 * Modules\Gdpr\Models\Treatment.
 *
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   query()
 *
 * @mixin \Eloquent
 */
class Treatment extends BaseModel
{
    use HasUuids;
    protected $fillable = [''];

    // protected $table = 'treatment';
    public $incrementing = false;
}
