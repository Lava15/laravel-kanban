<?php
declare(strict_types = 1);

namespace App\Models;

use App\Models\Column;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Board extends Model
{
    use HasFactory;
    
    public function columns() : HasMany
    {
        return $this->hasMany(Column::class);
    }
}
