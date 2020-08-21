@extends('layouts.admin')

@section('content')
    <div class="col-md-12 my-3">
        <div class="row">
        <div class="col-md-6">Create New Post</div>
        <div class="col-md-6" style="float:right">
            <button class="btn btn-info" style="float:right"><a href="/admin/Post/create">Add new post</a></button>
        </div>
    </div>
    </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('POSTS') }}</div>

                <div class="card-body">
                    @foreach($post_update as $post)

                        {{--                @foreach($contents as $content)--}}
                        <div class="col-12 single-content">
                            <p class="mb-5">
                                {{--                        <div class="img-bg" style="background-image: url('/storage/post_img/{{$post->post_img}}')"></div>--}}

                                <img src="/storage/post_img/{{$post->post_img}}" alt="Image" class="img-fluid">
                            </p>
                            <h1 class="mb-4">
                              Title:<br>  {{$post->post_title}}
                            </h1>
                            <div class="post-meta d-flex mb-5">

                                <div class="vcard">
                                    <span class="d-block"><a href="#">   author:<br>{{$post->post_author}}</a></span>
                                </div>
                            </div>
                            <p>Body:<br>{{$post->post_body}}</p>
                            <p>Headline:<br>{{$headline[0]->headline_title}}</p>
                            <p>Menu:<br>{{$menu[0]->menu_title}}</p>
                            <p>Editors Pick:@if($post->Editors_pick==1)
                               <strong style="color: #0a7d43"> {{'Editor Favourite'}}</strong>
                                @else
                                    <strong style="color: red"> {{'Regular'}}</strong>

                                @endif
                            </p>

                            <div class="pt-5">
                                <p>Tags:<br>
                                    @foreach($tag_object as $tag)
                                    <a href="#">{{$tag}}</a></p>
                                @endforeach
                            </div>
                    @endforeach
<div>
                            <button class="btn btn-info btn-lg"><a href="/admin/Post/{{$post->id}}/edit">Edit Details</a></button>

<form action="/admin/Post/{{$post->id}}" method="Post">
    @csrf
    @method('DELETE')
                            <button  type="submit" class="btn btn-danger btn-lg" style="float: right">Delete</button>
</form>
</div>

                </div>
            </div>

</div>

@endsection
@section('scripts')
@endsection
