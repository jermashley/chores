<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\Chore;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ChildChoreController extends Controller
{
    /**
     * Attach a chore to a child.
     */
    public function attach(Child $child, Chore $chore): JsonResponse
    {
        $child->chores()->attach($chore);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * Remove a chore from a child.
     */
    public function detach(Child $child, Chore $chore): JsonResponse
    {
        $child->chores()->detach($chore);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
