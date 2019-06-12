<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Auth;

class NoteController extends Controller
{
    public function index(){
    	return Note::all();
    }

    public function show(Note $note){
    	return $note;
    }

    public function store(Request $request){
        $user = Auth::guard('api')->user();
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'body' => 'max:1000',
            'user_email' => $user->email,
        ]);

    	$note = Note::create($request->all());

    	return response()->json($note, 201);
    }

    public function update(Request $request, Note $note){
        $user = Auth::guard('api')->user();
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'body' => 'max:1000',
            'user_email' => $user->email,
        ]);

    	$note->update($request->all());

    	return response()->json($note, 200);
    }

    public function delete(Note $note){
    	$note->delete();

    	return response()->json(null, 204);
    }
}
