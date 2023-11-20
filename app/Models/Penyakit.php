<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function kesehatans() {
        return $this->hasMany(AnakAsuh::class);
    }
}
