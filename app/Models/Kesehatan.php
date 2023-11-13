<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function anak_asuh() {
        return $this->belongsTo(AnakAsuh::class);
    }

    public function jenis_penyakit() {
        return $this->belongsTo(Penyakit::class);
    }
}
