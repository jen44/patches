<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Note;

use App\Http\Requests\CreateNoteRequest;
use App\Http\Requests\EditNoteRequest;
use App\Http\Requests\EditNoteXYRequest;
use Auth;

class NoteController extends Controller
{
     public function __construct(){
         $this->middleware('auth');
    }
    
    
    //
    public function createNote(CreateNoteRequest $request) {

        $note = Note::create($request->all());
        
        $note->save();
        
        return $note->id;

    }
    
    
    
     public function editNote(EditNoteRequest $request, $id) {
        
        $note = Note::find($id);
        $note->fill($request->all());
        $note->save();
        
         
    }
    
    
     public function editNoteXY(EditNoteXYRequest $request, $id) {
        //
        $note = Note::find($id);
         
         if($note){
             
             $note->fill($request->all());
            $note->save();
             
         }
         
         
    }
    
    
    public function deleteNote($id) {
        //
        $note = Note::find($id);
        $note->delete();
         
    }
}

?>