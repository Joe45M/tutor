<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    public $guarded = [];

    use HasFactory;

    public function tutor() {
        return $this->belongsTo(User::class);
    }

    public function student() {
        return $this->belongsTo(User::class);
    }

    public function messages() {
        return $this->hasMany(CommitmentMessage::class);
    }
}
