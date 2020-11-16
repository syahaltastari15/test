<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'Products_id',
        'customer_id',
        'Jumlah_beli',
        'total_harga',
        'tanggal_beli',
        'product_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'tanggal_beli' => 'date',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
