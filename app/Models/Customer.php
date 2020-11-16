<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = ['nama'];
    protected $table = 'customers';

    protected $searchableFields = ['*'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
