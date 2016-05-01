<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Board;

use App\Http\Requests\CreateBoardRequest;
use App\Http\Requests\EditBoardRequest;
use Auth;

class BoardController extends Controller
{
    //
//    
//    public function __construct(){
//         $this->middleware('auth.user', ['except' => ['showPosts', 'showIndivPosts']]);
//    }
    
    public function showBoards() {
        $boards = Board::all();
//        $boards = Board::orderBy('id')->get();
//        return view('boards', compact('boards'));
    }
    
    public function showCreationForm() {
        //
//        return view('createBoard');
    }
    
     public function createBoard(CreateBoardRequest $request) {
        //
        $board = board::create($request->all());
//        
//        $file = $request->file('background');
//        $newName = 'background'.$post->id.'.jpg';
//        $file->move('background', $newName);
//        $post->background = $newName;
        $board->save();
        
//        return redirect('board');
    }
    
    public function showIndivBoards($id) {
        //
        $boards = Board::find($id);
        return view('board', compact('board'));
        
    }
    
    public function edit($id) {
        //
        return view('board/'.$id.'/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPostRequest $request, $id) {
        //
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
