<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'note_container_id'
    ];

    public function note_containers()
    {
        return $this->belongsTo(NoteContainer::class);
    }
}
