<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'contact',
        'address',
        'birthday',
        'gender',
        'avatar',
        'carte_pay_id'
    ];

    protected $guarded = [];

    public function cartePays() {
        return $this->hasOne(cartePay::class);
    }
    public function payements() {
        return $this->belongsToMany(Payement::class)->withPivot(["datePaye", "sommePaye", "infoPaye"])->withTimestamps();
    }
}
