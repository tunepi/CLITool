<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use \Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;
use App\Models\UserFavorite;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\GitOption
 *
 * @property int $id
 * @property int $git_id
 * @property string|null $git_option
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption whereGitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption whereGitOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GitOption whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GitOption extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * 指定したカラム名のみcreate/update/fillが可能
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'git_id',
        'git_option',
        'description',
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
     * userFavoriteとのリレーション
     *
     * @return HasOne
     */
    public function userFavorite():HasOne
    {
        $user = Auth::user();

        return $this->hasOne(userFavorite::class, 'command_id', 'id')
	        ->where('type', UserFavorite::GIT)->where('user_id', $user->id);
    }

    /**
     * gitとのリレーション
     *
     * @return BelongsTo
     */
    public function git():BelongsTo
    {
        return $this->belongsTo(Git::class);
    }
}
