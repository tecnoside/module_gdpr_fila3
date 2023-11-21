<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d7a3f172 (first)
>>>>>>> 2a1a69f (.)
=======
>>>>>>> 80316d9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> d58ad792 (up)
=======
>>>>>>> d7a3f172 (first)
>>>>>>> 2a1a69f (.)
=======
>>>>>>> 80316d9 (.)
class Treatment extends BaseModel
{
    use HasUuids;
    protected $fillable = [''];

    // protected $table = 'treatment';
    public $incrementing = false;
}
