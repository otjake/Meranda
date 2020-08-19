<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use App\Comment;
use App\Replies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class PageController extends Controller
{
    public function tab(Post $menu)
    {
//        $menus=DB::select('select * from menus WHERE `menu_status`=1 ');//for out menu items
        $menus=Menu::where('menu_status',1)->get();

        $contents=Post::where('menu_id',$menu->id)->get();
//        $contents=DB::select("select * from posts WHERE menu_id=$menu->id");

        return view('/pages/single_menu',compact('menus','contents'));
    }
    public function singlePost(Post $post)
    {
        $menus=Menu::where('menu_status',1)->get();



        $contents=Post::where('id',$post->id)->get();

        ####GETTING AND UPDATING POST VISITS ON LINK CLICK#####
//        $visitNum = DB::select("select visits from posts where id= $post->id");
        $visitNum = Post::select('visits')->where('id',$post->id)->get();
        $count=$visitNum[0]->visits + 1;

        $affected = DB::update("update posts set visits=$count where id= $post->id");


$comments=Post::with(["comments"=>function($query){
                    $query->where('comment_status',1);
                },"reply"=>function($query){
    $query->orderByDesc('created_at');
}])->where('id',$post->id)->get();
//        $comments=Comment::with('reply')->where('post_id',$post->id)->where('comment_id',$post->id)->get();

//dd($comments);
        return view('/pages/single_blog',compact('menus','contents','comments'));
    }

    public function commentStore(Post $post,Request $request){

//        $request->all();
//        $comment=new Comment();
////
//       $comment->post_id=$post->id;
////        $comment->name=request('name');
////        $comment->email=request('email');
////        $comment->message=request('message');
////
////        $comment->save();
//
//       $data=request()->validate([
//           'post_id'=>"",
//           'name'=>'required',
//           'email'=>'required|email:dns,rfc',
//           'message'=>'required',
//       ]);
////the system maps the post id array to the data array since its not being inserted
//     $postArray= ['post_id' =>$post->id];
//       Comment::create($data,$postArray);
//        return Redirect::back();

        $action = request('action');

        // handle the register request
        if ($action === 'reply') {
//            return $this->register();
            $rules=array(
                'name'=>'required|alpha',
                'email'=>'required|email:dns,rfc',
                'message'=>'required',
            );

            $validator=Validator::make($request->all(),$rules);

            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()->all()]);

            }

            $formData=array(
                'post_id'=>$request->post_id,
                'comment_id'=>$request->comment_id,
                'r_name'=>$request->name,
                'r_email'=>$request->email,
                'r_message'=>$request->message,
            );
            //the system maps the post id array to the data array since its not being inserted
//     $postArray= ['post_id' =>$post->id];

            $inserter=replies::create($formData);

            return response()->json(['success'=>'Your comment has been added.']);

            // handle the login request


        }
        elseif ($action === 'comment')
        {

            $rules=array(
                'name'=>'required|alpha',
                'email'=>'required|email:dns,rfc',
                'message'=>'required',
            );

            $validator=Validator::make($request->all(),$rules);

            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()->all()]);

            }

            $formData=array(
                'post_id'=>$post->id,
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message,
            );
            //the system maps the post id array to the data array since its not being inserted
//     $postArray= ['post_id' =>$post->id];

            $inserter=Comment::create($formData);

            return response()->json(['success'=>'Your comment has been added.']);

        } else {
            throw new Exception("Unknown action");
        }


    }



}
