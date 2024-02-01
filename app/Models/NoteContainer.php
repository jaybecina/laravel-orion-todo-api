<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteContainer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}
