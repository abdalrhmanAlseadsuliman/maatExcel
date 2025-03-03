<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class house extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'user_id',
    ];



    public function user()
{
    return $this->belongsTo(User::class);
}
}
