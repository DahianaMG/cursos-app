<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::select('id', 'title', 'description')->get();
        return response()->json($courses);
    }

    public function coursesByCategory($id)
    {
        $category = Category::with('courses')->find($id);
        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $courses = $category->courses->map(function ($course) {
            return [
                'title' => $course->title,
                'description' => $course->description,
            ];
        });

        return response()->json([
            'id' => $category->id,
            'name' => $category->name,
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $course = Course::firstOrCreate([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'created_by' => $request->created_by
        ]);

        return response()->json($course);
    }

     /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $course = Course::select('id', 'title', 'description', 'category_id', 'created_by')->find($id);
        return response()->json($course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, int $id)
    {
        $course = Course::find($id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->category_id = $request->category_id;
        $course->created_by = $request->created_by;
        $course->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $course = Course::find($id);
        $course->delete();
    }
}
