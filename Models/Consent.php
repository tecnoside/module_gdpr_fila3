<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> 7405a7d4 (first)
=======
>>>>>>> 4a1eeab7 (Lint)

/**
 * Modules\Gdpr\Models\Consent.
 *
 * @property string                              $id
 * @property string                              $treatment_id
 * @property string                              $subject_id
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4a1eeab7 (Lint)
 * @property Carbon|null                         $created_at
 * @property Carbon|null                         $updated_at
 * @property \Modules\Gdpr\Models\Treatment|null $treatment
 *
 * @method static \Modules\Gdpr\Database\Factories\ConsentFactory factory($count = null, $state = [])
 * @method static Builder|Consent                                 newModelQuery()
 * @method static Builder|Consent                                 newQuery()
 * @method static Builder|Consent                                 query()
 * @method static Builder|Consent                                 whereCreatedAt($value)
 * @method static Builder|Consent                                 whereId($value)
 * @method static Builder|Consent                                 whereSubjectId($value)
 * @method static Builder|Consent                                 whereTreatmentId($value)
 * @method static Builder|Consent                                 whereUpdatedAt($value)
<<<<<<< HEAD
=======
 * @property \Illuminate\Support\Carbon|null     $created_at
 * @property \Illuminate\Support\Carbon|null     $updated_at
 * @property \Modules\Gdpr\Models\Treatment|null $treatment
 *
 * @method static \Modules\Gdpr\Database\Factories\ConsentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   whereUpdatedAt($value)
 *
 * @property \Modules\Gdpr\Models\Treatment|null $treatment
 *
 * @method static \Modules\Gdpr\Database\Factories\ConsentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consent   query()
>>>>>>> 7405a7d4 (first)
=======
>>>>>>> 4a1eeab7 (Lint)
 *
 * @mixin \Eloquent
 */
class Consent extends BaseModel
{
    use HasUuids;

    // protected $table = 'consent';

    public $incrementing = false;

    public $fillable = ['subject_id', 'treatment_id'];

    public function treatment(): BelongsTo
    {
        return $this->belongsTo(Treatment::class);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 7405a7d4 (first)
