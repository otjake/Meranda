<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class adminCommentController extends Controller
{
    public function index()
    {
        $notifications=Comment::where('comment_status',0)->get();

        $contents=Comment::with('post')->get();
        return view('admin.Comment.homedash',compact('contents','notifications'));
    }



    public function update(Request $request, Comment $comment)
    {
        $action = request('action');
        if($action==='status'){

            $comment=Comment::findorfail($comment->id);
            $comment->comment_status=1;
            $update=$comment->save();
            if($update) {
                return response()->json(['success' => 'Accepted']);
            }
            return response()->json(['error' => "error"]);

        }



//        return redirect('/admin/Comment/homedash')->with('success','UPDATED');
    }

    public function delete(Request $request,Comment $comment){
$delete=Comment::findorfail($comment->id)->delete();
        if($delete) {
            return response()->json(['success' => 'Deleted']);
        }
        return response()->json(['error' => "error"]);
//        return redirect('/admin/Comment/homedash')->with('success','Delete');
    }
}
