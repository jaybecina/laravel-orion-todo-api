<?php

namespace App\Http\Controllers\Api;

use App\Models\Todo;
use Orion\Http\Controllers\RelationController;
use Illuminate\Http\Request;
use Orion\Concerns\DisablePagination;
use Orion\Concerns\DisableAuthorization;

class TodoNoteContainerController extends RelationController
{
    use DisablePagination;
    use DisableAuthorization;

    /**
     * Fully-qualified model class name
     */
    protected $model = Todo::class; // or "App\Models\Todo"

    /**
     * Name of the relationship as it is defined on the Todo model
     */
    protected $relation = 'note_containers';
}
