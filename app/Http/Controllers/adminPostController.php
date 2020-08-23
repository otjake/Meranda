<?php

namespace App\Http\Controllers;

use App\Comment;
use App\headline;
use App\Mail\PostCreated;
use App\Menu;
use App\Post;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function GuzzleHttp\Promise\all;

class adminPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $notifications=Comment::where('comment_status',0)->get();

        $posts=Post::paginate(2);
        session(['notifications'=>$notifications]);

        return view('admin.Post.home',compact('posts','notifications'));
    }


    public function create()
    {
        $headlines=headline::all();
        $menus=menu::all();
//        $notifications_from_session= request()->session()->all();
//        $notifications=$notifications_from_session['notifications'];

        $notifications=session('notifications');


        return view('admin.Post.create',compact('headlines','menus','notifications'));
    }

    public function store(Request $request)
    {
     $this->validate($request,[
         'menu_id'=>'required|numeric',
         'headline_id'=>'required|numeric',
         'post'=>'nullable',
         'post_title'=>'required',
         'post_body'=>'required',
         'post_tags'=>'required',
         'post_img'=>'image|max:1999',//default upload size is 2000Bytes
         'post_author'=>'required',
         'Editors_pick'=>'nullable',
         'post_status'=>'nullable',
     ]);
//     $rules=array(
//         'menu_id'=>'required|numeric',
//         'post_id'=>'required|numeric',
//         'post'=>'nullable',
//     'post_title'=>'required',
//         'post_body'=>'required',
//         'post_tags'=>'required',
//         'post_img'=>'image|max:1999',//default upload size is 2000Bytes
//     );

//checks if and image was chosen
if($request->hasFile('post_img')){
    //get filename with the extension
$filenameWithExt=$request->file('post_img')->getClientOriginalName();
//get just file name
    $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
    //get extention
    $extension=$request->file('post_img')->getClientOriginalExtension();
    //file to store
    $fileNameToStore=$filename.'_'.time().'.'.$extension; //nameing convention for easier identification
    //upload image
    $path=$request->file('post_img')->storeAs('public/post_img',$fileNameToStore);
//run 'php artisan storage:link' to create storage link to public

}else{
    $fileNameToStore='noImage.jpg';
}

        $post=new Post();
        $post->menu_id=$request->input('menu_id');
        $post->headline_id=$request->input('headline_id');
        $post->post=$request->input('post');
        $post->post_title=$request->input('post_title');
        $post->post_body=$request->input('post_body');
        $post->post_tags=$request->input('post_tags');
//        if($request->hasFile('post_img')){
//            $post->post_img=$fileNameToStore;
//        }
        $post->post_img=$fileNameToStore;

        $post->post_author=$request->input('post_author');
        $post->Editors_pick=$request->input('Editors_pick');
        $post->post_status=$request->input('post_status');
        $post->save();

        ####SENDING EMAIL CHECK PERSONAL DOCUMENTATION#####

        $justCreated=Post::latest()->first();
$subscribers=Subscriber::all();
//dd($subscribers[0]->email);
foreach ($subscribers as $subscriber){
        Mail::to($subscriber)->send(
            new PostCreated($justCreated)
        );
        ####SENDING EMAIL CHECK PERSONAL DOCUMENTATION###
    }

        return redirect('/admin/Post/home')->with('success','New Post');
    }

    public function show(Post $post){
        $post_update=Post::where('id',$post->id)->get();
        $headline=headline::where('id',$post_update[0]->headline_id)->get();
        $menu=menu::where('id',$post_update[0]->menu_id)->get();
        //looping through tags
        $tag_object=explode(",",$post_update[0]->post_tags);

        $notifications=session('notifications');

return view('/admin/Post/show',compact('post_update','headline','menu','tag_object','notifications'));
    }


    public function edit(Post $post){
        $post_update=Post::where('id',$post->id)->get();


        $headline=headline::where('id',$post_update[0]->headline_id)->get();
        $menu=menu::where('id',$post_update[0]->menu_id)->get();
        $headlines=headline::all();
        $menus=menu::all();


        $notifications=session('notifications');

return view('/admin/Post/edit',compact('post_update','headline','menu','headlines','menus','notifications'));
    }


    public function update(Request $request,Post $post){

        $this->validate($request,[
            'menu_id'=>'required|numeric',
            'headline_id'=>'required|numeric',
            'post'=>'nullable',
            'post_title'=>'required',
            'post_body'=>'required',
            'post_tags'=>'required',
            'post_img'=>'image|max:1999',//default upload size is 2000Bytes
            'post_author'=>'required',
            'Editors_pick'=>'',
            'post_status'=>'',
        ]);


//checks if and image was chosen
        if($request->hasFile('post_img')){
            //get filename with the extension
            $filenameWithExt=$request->file('post_img')->getClientOriginalName();
//get just file name
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get extention
            $extension=$request->file('post_img')->getClientOriginalExtension();
            //file to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension; //nameing convention for easier identification
            //upload image

            $path=$request->file('post_img')->storeAs('public/post_img',$fileNameToStore);


//run 'php artisan storage:link' to create storage link to public

        }

        $post=Post::findorfail($post->id);
        $post->menu_id=$request->input('menu_id');
        $post->headline_id=$request->input('headline_id');
        $post->post=$request->input('post');
        $post->post_title=$request->input('post_title');
        $post->post_body=$request->input('post_body');
        $post->post_tags=$request->input('post_tags');
        if($request->hasFile('post_img')){
            $post->post_img=$fileNameToStore;
        }

        $post->post_author=$request->input('post_author');
        $post->Editors_pick=$request->input('Editors_pick');
        $post->post_status=$request->input('post_status');
        $post->save();


        return redirect('/admin/Post/home')->with('success','UPDATED');
    }

    public function delete(Request $request,Post $post){
     Post::findorfail($post->id)->delete();
     return redirect('/admin/Post/home')->with('success','Deleted');
    }

}
