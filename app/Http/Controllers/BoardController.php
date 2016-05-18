<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use App\Http\Requests;

use App\Models\Board;
use App\Models\Background;
use App\Models\Note;

use App\Http\Requests\CreateBoardRequest;
use App\Http\Requests\EditBoardRequest;
use App\Http\Requests\UploadBackgroundRequest;
use App\Http\Requests\EditBackgroundRequest;

use Auth;

class BoardController extends Controller
{
    
    public function __construct(){
//         $this->middleware('auth');
//         $this->middleware('auth.user', ['only' => ['showDashboard']]);
    }
    
    
     public function createBoard(CreateBoardRequest $request) {
        
        $board = board::create($request->all());
        $board->user_id = Auth::User()->id;         
        $background = 'grey-line.jpg';
        $board->background = $background;
        $board->save();
         
        return redirect('board/'.$board->id);
         
         //add success message
        
    }
    
      public function showDashboard($id){
        

        $user = Auth::User();
        $boards = Board::paginate(3);
        return view('dashboard', compact('board'));
    }
    
    public function showIndivBoard($id) {
        
        $board = Board::find($id);
        return view('board', compact('board'));
//        return $board->id;
        
        
    }
    
    public function updateBoardBg(UploadBackgroundRequest $request, $id) {
        
//        $board = Board::find($id);
//        $board->fill($request->all());
//        $board->save();
        
    }
    
    public function uploadBoardBg(UploadBackgroundRequest $request, $id) {
        
        return "hi";
//        
//        $background = Background::create();
//        $newName = "background-".$user->id."-".time().".jpg";
//        $request->file('file') = $newName;
//        $background->filename = $newName;
//        $background->save();
//        
//        
//        $board = Board::find($id);
//        $request->file("file")->move("images/backgrounds",$newName);
//        $board->background = $newName;
//        
//        $board->save();
        
    }

    public function editBoard(EditBoardRequest $request, $id){
        
        $board = Board::find($id);
        $board->fill($request->all());
        $board->save();
        
        return redirect(URL::previous());
        
        
    }
    
    
    public function deleteBoard($id)
    {
        
        $board = Board::find($id);
        foreach($board->notes as $note){
            $note->delete();
        }
        $board->delete();
        
        //alert deleted with noty
        return redirect('dashboard/'.Auth::User()->id);

    }
    
    public function clearBoard($id)
    {
        
        $board = Board::find($id);
        foreach($board->notes as $note){
            $note->delete();
        }
        //alert delete with noty
        return redirect(url::previous());

    }
}
