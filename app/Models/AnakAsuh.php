<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakAsuh extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function kesehatans() {
        return $this->hasMany(Kesehatan::class);
    }

    public function prestasis() {
        return $this->hasMany(Prestasi::class);
    }

    public function pendidikans() {
        return $this->hasMany(Pendidikan::class);
    }
}

