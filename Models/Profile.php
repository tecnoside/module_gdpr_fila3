<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

// use Modules\User\Models\BaseProfile;

/**
 * @property int                             $id
 * @property string|null                     $type
 * @property string|null                     $first_name
 * @property string|null                     $last_name
 * @property string|null                     $full_name
 * @property string|null                     $email
 * @property int                             $id
 * @property string|null                     $type
 * @property string|null                     $first_name
 * @property string|null                     $last_name
 * @property string|null                     $full_name
 * @property string|null                     $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $user_id
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property int                             $is_active
 *
 * @method static \Modules\Gdpr\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUserId($value)
 *                                                                                                    =======
 *
 * @property string|null $deleted_by
 * @property int         $is_active
 *
 * @method static \Modules\Gdpr\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUserId($value)
 *                                                                                                    >>>>>>> fa4ebca (Lint)
 *
 * @mixin \Eloquent
 */
class Profile extends BaseModel
{
    /** @var string */
    protected $connection = 'gdpr';
}
