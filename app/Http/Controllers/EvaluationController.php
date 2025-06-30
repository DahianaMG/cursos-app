<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function evaluationsByUser($id)
    {
        $user = User::with('evaluations.enrollment.course')->find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $evaluations = $user->evaluations->map(function ($evaluation) {
            return [
                'course' => $evaluation->enrollment->course->title,
                'score' => $evaluation->score,
                'feedback' => $evaluation->feedback,
                'evaluated_at' => $evaluation->evaluated_at
            ];
        });

        return response()->json([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'evaluations' => $evaluations
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
    public function store(Request $request)
    {
        $evaluation = Evaluation::firstOrCreate([
            'enrollment_id' => $request->enrollment_id,
            'score' => $request->score,
            'feedback' => $request->feedback
        ]);

        return response()->json([
            'id' => $evaluation->id,
            'enrollment_id' => $evaluation->enrollment_id,
            'score' => $evaluation->score,
            'feedback' => $evaluation->feedback
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        //
    }
}
