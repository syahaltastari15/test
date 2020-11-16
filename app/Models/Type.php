<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['type'];

    protected $searchableFields = ['*'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
