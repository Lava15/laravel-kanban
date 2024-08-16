<?php
declare(strict_types = 1);

namespace App\Models;

use App\Models\Board;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Column extends Model
{
    use HasFactory;
    public function board(): BelongsTo
    {
        return $this->belongsTo(Board::class);
    }
}
