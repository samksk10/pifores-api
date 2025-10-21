<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index() {
        return Activity::with(['project', 'locations', 'indicators'])->get();
    }

    public function store(Request $request) {
        $activity = Activity::create($request->all());
        return response()->json($activity, 201);
    }

    public function show($id) {
        return Activity::with(['project', 'locations', 'indicators'])->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $activity = Activity::findOrFail($id);
        $activity->update($request->all());
        return response()->json($activity);
    }

    public function destroy($id) {
        Activity::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
