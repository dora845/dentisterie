<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'devis',
        'objetDevis',
        'reste',
        'carte_pay_id',
    ];

    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }
    public function cartepays()
    {
        return $this->belongsTo(CartePay::class);
    }
}
