<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    use HasFactory;
}
