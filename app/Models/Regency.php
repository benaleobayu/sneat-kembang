<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regency extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pelanggan(): HasMany
    {
        return $this->hasMany(pelanggan::class);
    }
    public function langganan(): HasMany
    {
        return $this->hasMany(Langganan::class);
    }
    
}
