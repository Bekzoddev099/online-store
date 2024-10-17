<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
<<<<<<< HEAD
=======
use Illuminate\Http\JsonResponse;
>>>>>>> 36a8d4d (add phpunit)
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return CategoryResource::collection(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(Request $request)
    {
        //
=======
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255', 'unique:' . Category::class],
        ]);

        $category = Category::query()->create([
            'name' => $request->name,
        ]);

        return response()->json([
            'message' => "Category successful created",
            'data'    => new CategoryResource($category)
        ]);
>>>>>>> 36a8d4d (add phpunit)
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(string $id): CategoryResource
    {
        return new CategoryResource(Category::query()->findOrFail($id));
=======
    public function show(string $id): CategoryResource|JsonResponse
    {
        $category = Category::query()->find($id);

        return $category ? new CategoryResource($category) :
            response()->json([
                'message' => "Category not found",
            ], 404);
>>>>>>> 36a8d4d (add phpunit)
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, string $id)
    {
        //
=======
    public function update(Request $request, string $id): JsonResponse
    {
        $request->validate([
            'name' => ['unique:' . Category::class],
        ]);

        $category = Category::query()->find($id);

        if (!$category) {
            return response()->json([
                'message' => "Category not found",
            ], 404);
        }

        $category->update([
            'name'        => $request->name ? $request->name : $category->name,
            'description' => $request->description ?? $category->description,
            'parent'      => $request->parent ?? $category->parent,
        ]);

        return response()->json([
            'message' => "Category successful updated",
            'data'    => new CategoryResource($category)
        ]);
>>>>>>> 36a8d4d (add phpunit)
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(string $id)
    {
        //
=======
    public function destroy(string $id): JsonResponse
    {
        $category = Category::query()->find($id);

        if (!$category) {

            return response()->json([
                'message' => "Category not found"
            ], 404);
        }

        $category->delete();

        return response()->json([
            'message' => "Category successful deleted",
        ]);
>>>>>>> 36a8d4d (add phpunit)
    }
}
