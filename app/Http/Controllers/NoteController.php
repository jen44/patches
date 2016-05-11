<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Note;

use App\Http\Requests\CreateNoteRequest;
use App\Http\Requests\EditNoteRequest;
use Auth;

class NoteController extends Controller
{
    //
//    public function createNote(CreateNoteRequest $request) {
//
//        $note = board::create($request->all());
//        $note->user_id = Auth::User()->id;
//        
//        $note->save();
//

        //add success message

    
    
    
     public function editNote(EditNoteRequest $request, $id) {
        //
        $note = Note::find($id);
//        $note->pos_x = $request->get("pos_x");
//        $note->pos_y = $request->get("pos_y");
         $note->fill($request->all());
        $note->save();
         
        return 'saved';
    }
    
}

?>