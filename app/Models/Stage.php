<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = ['stage_id'];

    public function users()
    {
        return $this->morphedByMany(User::class, 'stageable');
    }
}
