<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unit.
 *
 * @property int $id
 * @property string $name
 * @property Collection|ProblemCategory[] $problem_categories
 * @property Collection|Ticket[] $tickets
 * @property Collection|User[] $users
 */
class Unit extends Model
{
    use SoftDeletes;
    public $timestamps = false;

    protected $table = 'units';

    protected $fillable = [
        'name',
    ];

    public function problemCategories()
    {
        return $this->hasMany(ProblemCategory::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
