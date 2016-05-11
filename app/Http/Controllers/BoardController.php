<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Board;

use App\Http\Requests\CreateBoardRequest;
use App\Http\Requests\EditBoardRequest;

use App\Http\Requests\EditBackgroundRequest;

use Auth;

class BoardController extends Controller
{
    //
//    
    public function __construct(){
         $this->middleware('auth');
         $this->middleware('auth.user', ['only' => ['update','destroy']]);
    }
    
    
     public function createBoard(CreateBoardRequest $request) {
        //
        $board = board::create($request->all());
        $board->user_id = Auth::User()->id;
//        
//        $file = $request->file('background');
//        $newName = 'background'.$post->id.'.jpg';
//        $file->move('background', $newName);
         
        $background = 'diagnal-fabric.png';
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
        //
        $board = Board::find($id);
        $hasNav = true;
        return view('board', compact('board','hasNav'));
        
        
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBoardBg(EditBackgroundRequest $request, $id) {
        
        $board = Board::find($id);
        $board->fill($request->all());
        $board->save();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
