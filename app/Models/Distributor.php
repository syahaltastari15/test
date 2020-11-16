<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Distributor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['nama_distributor', 'alamat', 'no_telp'];

    protected $searchableFields = ['*'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
