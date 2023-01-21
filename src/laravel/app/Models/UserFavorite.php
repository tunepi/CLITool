<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

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
    use HasFactory, Notifiable, SoftDeletes;

    /** @var Git */
    const GIT = 1;

    const TYPE_AND_ROUTE = [
        '1' => 'git.git'
    ];

    /**
     * 指定したカラム名のみcreate/update/fillが可能
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'command_id',
        'user_id',
        'type',
        'is_favorite'
    ];

    /**
     * 配列/JSONシリアル化の日付を準備
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y年m月d日');
    }

    /**
     * gitOptionsとのリレーション
     *
     * @return BelongsTo
     */
    public function git():BelongsTo
    {
        return $this->belongsTo(GitOption::class, 'command_id','id');
    }
}
