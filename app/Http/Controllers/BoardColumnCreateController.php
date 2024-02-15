<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreColumnRequest;
use App\Models\Board;
use App\Models\Column;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BoardColumnCreateController extends Controller
{
    /**
     * the incoming request.
     */
    public function __invoke(StoreColumnRequest $request, Board $board): RedirectResponse
    {
        $board->addColumn(Column::create($request->all()));
        return back();
    }
}
