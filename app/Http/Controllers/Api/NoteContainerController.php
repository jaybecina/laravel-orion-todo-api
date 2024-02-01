<?php

namespace App\Http\Controllers\Api;

use App\Models\NoteContainer;
use Orion\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Concerns\DisablePagination;
use Orion\Concerns\DisableAuthorization;

class NoteContainerController extends Controller
{
    use DisablePagination;
    use DisableAuthorization;

    /**
     * Fully-qualified model class name
     */
    protected $model = NoteContainer::class;
}
