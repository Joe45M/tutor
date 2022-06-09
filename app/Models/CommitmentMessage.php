<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitmentMessage extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function getSentByUserAttribute() {
        return auth()->id() == $this->user_id;
    }
}
