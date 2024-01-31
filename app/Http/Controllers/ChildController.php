<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChildRequest;
use App\Http\Requests\UpdateChildRequest;
use App\Models\Child;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $children = Child::whereUserId(Auth::id())->get();

        return Inertia::render('Children/Index', [
            'children' => $children,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Children/Create');
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

        return redirect()->route('child.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Child $child)
    {
        return Inertia::render('Children/Show', [
            'child' => $child,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Child $child)
    {
        return Inertia::render('Children/Edit', [
            'child' => $child,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildRequest $request, Child $child)
    {
        $child->update($request->validated());

        return redirect()->route('child.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Child $child)
    {
        $child->delete();

        return redirect()->route('child.index');
    }
}
