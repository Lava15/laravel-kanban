<?php
declare(strict_types = 1);

namespace App\Models;

use App\Models\Card;
use App\Models\Board;
use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\EloquentSortable\SortableTrait;

class Column extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];
    public function board(): BelongsTo
    {
        return $this->belongsTo(Board::class);
    }
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);    
    }
}
