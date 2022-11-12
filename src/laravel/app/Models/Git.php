<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Git
 *
 * @property int $id
 * @property string $git_name
 * @property int $git_type
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Git newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Git newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Git query()
 * @method static \Illuminate\Database\Eloquent\Builder|Git whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Git whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Git whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Git whereGitName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Git whereGitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Git whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Git whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Git extends Model
{
    use HasFactory;
}
