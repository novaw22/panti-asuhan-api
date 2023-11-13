<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProgramDonatur extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function program_donatur() {
        return $this->belongsTo(ProgramDonatur::class);
    }
}
