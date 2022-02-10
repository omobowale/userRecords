<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'gender',
        'phone',
        'state_id',
        'lga_id',
        'ward_id',
        'address'
    ];


    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
