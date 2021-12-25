<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
