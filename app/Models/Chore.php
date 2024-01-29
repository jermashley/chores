<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chore extends Model
{
    use HasFactory;
    use HasUuid;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'chore_category_id',
    ];

    /**
     * Get the category that owns the chore.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ChoreCategory::class);
    }

    /**
     * Get the children for the chore.
     */
    public function assignee(): BelongsToMany
    {
        return $this->belongsToMany(Child::class);
    }
}
