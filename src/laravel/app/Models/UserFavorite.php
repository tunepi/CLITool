<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserFavorite
 *
 * @property int $id
 * @property int $user_id
 * @property int $command_id
 * @property int $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereCommandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereUserId($value)
 * @mixin \Eloquent
 */
class UserFavorite extends Model
{
    use HasFactory;
}
