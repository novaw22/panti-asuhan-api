<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDonatur extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function jenis_program() {
        return $this->belongsTo(JenisProgram::class);
    }

    public function foto_program_donaturs() {
        return $this->hasMany(FotoProgramDonatur::class);
    }
}
