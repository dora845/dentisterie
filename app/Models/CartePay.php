<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartePay extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id'
    ];

    public function patients()
    {
        return $this->belongsTo(Patient::class);
    }

    public function payements()
    {
        return $this->hasMany(Payement::class);
    }
}
