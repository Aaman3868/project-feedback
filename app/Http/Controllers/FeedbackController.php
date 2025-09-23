<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FeedbackController extends Controller
{
  public function store(Request $request, Project $project)
{
    $request->validate([
        'highlighted_text' => 'required|string',
        'comment' => 'required|string',
    ]);

    $feedback = $project->feedbacks()->create([
        'user_id' => auth()->id(),
        'highlighted_text' => $request->highlighted_text,
        'comment' => $request->comment,
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Feedback added successfully!',
        'feedback' => [
            'user_name' => $feedback->user->name,
            'highlighted_text' => $feedback->highlighted_text,
            'comment' => $feedback->comment,
        ]
    ]);
}

}
