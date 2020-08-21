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
                    {{--        //donnt forget multipart/form-data--}}
                    <form method="POST" action="/admin/Post/home" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="menu_id" class="col-md-4 col-form-label ">Menu ID</label>

                            <div class="col-md-6">
                                <select class="form-control" name="menu_id"> <option value="">Select Menu</option>

                                    @foreach($menus as $menu)
                                        <option value="{{$menu->id}}">{{$menu->menu_title}}-{{$menu->id}}</option>
                                    @endforeach

                                </select>




                                @error('menu_id')
                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="headline_id" class="col-md-4 col-form-label ">Headline ID</label>

                            <div class="col-md-6">
                                <select class="form-control" name="headline_id">
                                    <option value="">Select head line</option>

                                @foreach($headlines as $headline)
                                    <option value="{{$headline->id}}">{{$headline->headline_title}}-{{$headline->id}}</option>
                                    @endforeach
                                </select>
                                @error('headline_id')
                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="post" class="col-md-4 col-form-label ">Menu Name</label>

                            <div class="col-md-6">
                                <input id="post" type="text" class="form-control" name="post" value="{{ old('post')}}" >

                                @error('post')
                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="post_title" class="col-md-4 col-form-label ">Title</label>

                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control" name="post_title" value="{{ old('post_title')}}">

                                @error('post_title')
                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="post_body" class="col-md-4 col-form-label ">Body</label>

                            <div class="col-md-6">
                                <textarea name="post_body" id="post_body" cols="30" rows="10" class="form-control"></textarea>

                                @error('post_body')
                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="post_tags" class="col-md-4 col-form-label ">Tags</label>

                            <div class="col-md-6">
                                <input id="post_tags" type="text" class="form-control" name="post_tags" value="{{ old('post_tags') }}"  autocomplete="url" autofocus>

                                @error('post_tags')
                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="post_img" class="col-md-4 col-form-label ">Image</label>

                            <div class="col-md-6">
                                <input id="post_img" type="file" class="form-control-file" name="post_img" value="{{ old('post_img')}}"  >

                                @error('post_img')

                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="post_author" class="col-md-4 col-form-label ">Author</label>

                            <div class="col-md-6">
                                <input id="post_author" type="text" class="form-control" name="post_author" value="{{ old('post_author') }}">

                                @error('post_author')
                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Editors_pick" class="col-md-4 col-form-label ">Editor Pick</label>

                            <div class="col-md-6">
                                <input id="Editors_pick" type="checkbox" class="form-control" name="Editors_pick" value="{{ old('Editors_pick') }}">

                                @error('Editors_pick')
                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="post_status" class="col-md-4 col-form-label ">Display Status</label>

                            <div class="col-md-6">
                                <input id="post_status" type="checkbox" class="form-control" name="post_status" value="{{ old('post_status') }}"  autocomplete="url" autofocus>

                                @error('post_status')
                                <strong style="color:red">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

{{--                 --}}
{{--                        <div class="form-group">--}}
{{--                            <label for="Editors_pick" class="col-md-4 col-form-label ">Editor Pick</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="Editors_pick" type="number" class="form-control" name="Editors_pick" value="{{ old('Editors_pick') }}">--}}

{{--                                @error('Editors_pick')--}}
{{--                                <strong style="color:red">{{ $message }}</strong>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="post_status" class="col-md-4 col-form-label ">Display Status</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="post_status" type="number" class="form-control" name="post_status" value="{{ old('post_status') }}"  autocomplete="url" autofocus>--}}

{{--                                @error('post_status')--}}
{{--                                <strong style="color:red">{{ $message }}</strong>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <button class="btn btn-primary mt-2">Submit Post</button>


                    </form>



                </div>
            </div>

</div>

@endsection
@section('scripts')
@endsection
