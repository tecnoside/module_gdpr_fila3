<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
use function Safe\json_encode;
>>>>>>> cc03aadb (up)
use Illuminate\Support\Facades\Crypt;

=======
>>>>>>> 18b67f85 (up)
=======
>>>>>>> d7a3f172 (first)
>>>>>>> 2a1a69f (.)
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Crypt;

use function Safe\json_encode;

/**
 * Modules\Gdpr\Models\Event.
 *
 * @property \Modules\Gdpr\Models\Consent|null $consent
 * @property mixed                             $ip
 * @property mixed                             $payload
 *
 * @method static \Modules\Gdpr\Database\Factories\EventFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Event   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   query()
 *
 * @mixin \Eloquent
 */
class Event extends BaseModel
{
    use HasUuids;

    // protected $table = 'event';

    public $fillable = [
        'id',
        'action',
        'treatment_id',
        'consent_id',
        'subject_id',
        'payload',
    ];

<<<<<<< HEAD
    public function consent(): BelongsTo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function consent(): BelongsTo
=======
    public function consent():BelongsTo
>>>>>>> cc03aadb (up)
=======
    public function consent(): BelongsTo
>>>>>>> 18b67f85 (up)
=======
    public function consent(): BelongsTo
>>>>>>> d7a3f172 (first)
>>>>>>> 2a1a69f (.)
    {
        return $this->belongsTo(Consent::class);
    }

    public function setPayloadAttribute(?string $value): void
    {
        $this->attributes['payload'] = Crypt::encrypt(json_encode($value, JSON_THROW_ON_ERROR));
    }

    public function setIpAttribute(?string $value): void
    {
        $this->attributes['ip'] = Crypt::encrypt($value);
    }
}
