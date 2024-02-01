<?php

namespace App\Http\Controllers\Api;

use App\Models\NoteContainer;
use Orion\Http\Controllers\RelationController;
use Illuminate\Http\Request;
use Orion\Concerns\DisablePagination;
use Orion\Concerns\DisableAuthorization;

class NoteContainerTodoController extends RelationController
{
    use DisablePagination;
    use DisableAuthorization;
    /**
     * Fully-qualified model class name
     */
    protected $model = NoteContainer::class; // or "App\Models\NoteContainer"

    /**
     * Name of the relationship as it is defined on the NoteContainer model
     */
    protected $relation = 'todos';
}
