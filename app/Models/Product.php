<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'nama_barang',
        'type_id',
        'distributor_id',
        'tanggal_masuk',
        'harga_barang',
        'stok_barang',
        'keterangan',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'tanggal_masuk' => 'date',
    ];

    public function distributor()
    {
        return $this->belongsTo(Distributor::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function getDueDateAttribute($value) {
        return $value->format('Y-m-d');
    }
}
