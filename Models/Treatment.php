<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Modules\Gdpr\Database\Factories\TreatmentFactory;

/**
 * Modules\Gdpr\Models\Treatment.
 *
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static Builder|Treatment newModelQuery()
 * @method static Builder|Treatment newQuery()
 * @method static Builder|Treatment query()
 * @mixin \Eloquent
 */
class Treatment extends BaseModel
{
    use HasUuids;
    protected $fillable = [''];

    // protected $table = 'treatment';
    public $incrementing = false;
}
