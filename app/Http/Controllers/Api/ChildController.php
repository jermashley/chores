<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChildRequest;
use App\Http\Requests\UpdateChildRequest;
use App\Models\Child;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $children = Child::whereUserId(Auth::id())
            ->with('chores')
            ->get();

        return response()->json($children, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChildRequest $request)
    {
        $child = Child::create([
            'name' => $request->input('name'),
            'user_id' => Auth::id(),
        ]);

        $child->saveOrFail();

        return response()->json($child, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Child $child)
    {
        return response()->json($child, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildRequest $request, Child $child)
    {
        $child->update($request->validated());

        return response()->json($child, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Child $child)
    {
        $child->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
