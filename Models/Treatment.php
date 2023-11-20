<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

<<<<<<< HEAD
/**
 * Modules\Gdpr\Models\Treatment
 *
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @mixin \Eloquent
 */
=======
>>>>>>> d58ad792 (up)
class Treatment extends BaseModel
{
    protected $fillable = [''];

    use HasUuids;


    // protected $table = 'treatment';
    public $incrementing = false;
}
