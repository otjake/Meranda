<?php

namespace App\Http\Controllers;

use App\headline;
use App\Menu;
use App\Post;
use App\Subscriber;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

        $menus = Menu::where('menu_status', 1)->get();
//        $menus=DB::select('select * from menus WHERE `menu_status`=1 ');


        ####GETTTING CONTENT BASED ON EDITORS STATUS###


//        $Editors_picks=Post::where('Editors_pick',"=",1)->orderByDesc('created_at')->limit(3)->get();
//        $Editors_picks=Post::where('Editors_pick',"=",1)->inRandomOrder()->get();

//        $Editors_picks=DB::select('SELECT posts.* FROM `posts` JOIN `headlines` ON posts.headline_id=headlines.id WHERE headlines.headline_status=1 AND posts.Editors_pick=1 AND posts.post_status=1 ORDER BY RAND () ASC ');


//
        $Editors_picks = post::with(['headline' => function ($query) {
            $query->where('headline_status', 1);
        }])->where('Editors_pick', 1)->where('post_status', 1)->get();
//        $Editors_picks=DB::select('select * from posts WHERE `Editors_pick`=1 ORDER BY posts.created_at ASC LIMIT 0,3');


####GETTING HEADLINES AND ITS CORRESPONDING POSTS ###

        //laravel by default uses the id of the parent table to connect to a parentTableName_id on the child table and let all naming conventions match

        $headline_posts = headline::with(['Post' => function ($query) {
            $query->where('post_status', 1)->where('Editors_pick', 1);
        }])->where('headline_status', 1)->get();


        ####GETTTING recent post###

        $recent_posts = Post::where('post_status', 1)->orderByDesc('created_at')->paginate(2);

        $trends=Post::where('post_status', 1)->orderByDesc('visits','created_at')->limit(5)->get();


        return view('welcome', compact('menus', 'Editors_picks', 'headline_posts', 'recent_posts','trends'));
    }

    public function store(Request $request)
    {

        $rules = array(
            'email' => 'unique:subscribers|required|email:rfc,dns',

        );

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);

        }
        $form_data=array(
            'email'=>$request->email,
        );
        $inserter=Subscriber::create($form_data);

        return response()->json(['success'=>'Added new record.']);

    }

}
