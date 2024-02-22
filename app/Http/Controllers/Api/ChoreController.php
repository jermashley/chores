<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChoreRequest;
use App\Http\Requests\UpdateChoreRequest;
use App\Models\Chore;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ChoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chores = Chore::whereId(Auth::id())->get();

        return response()->json($chores, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChoreRequest $request)
    {
        $chore = Chore::create($request->validated());

        return response()->json($chore, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chore $chore)
    {
        return response()->json($chore, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChoreRequest $request, Chore $chore)
    {
        $chore->update($request->validated());

        return response()->json($chore, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chore $chore)
    {
        $chore->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
