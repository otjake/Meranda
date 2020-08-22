@extends('layouts.app')
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row">
                @foreach($comments as $post)

                {{--                @foreach($contents as $content)--}}
                    <div class="col-lg-8 single-content">
                        <p class="mb-5">
{{--                        <div class="img-bg" style="background-image: url('/storage/post_img/{{$post->post_img}}')"></div>--}}

                        <img src="/storage/post_img/{{$post->post_img}}" alt="Image" class="img-fluid">
                        </p>
                        <h1 class="mb-4">
                            {{$post->post_title}}
                        </h1>
                        <div class="post-meta d-flex mb-5">
                            <div class="bio-pic mr-3">
                                <img src="{{asset($post->post_img)}}" alt="Image" class="img-fluidid">
                            </div>
                            <div class="vcard">
                                <span class="d-block"><a href="#">{{$post->post_author}}</a> in <a href="#">News</a></span>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                        <p>{{substr($post->post_body,0,200)}}</p>

                        <div class="pt-5">
                            <p>Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
                        </div>


                        <div class="pt-5">
                            <div class="section-title">
                                <h2 class="mb-5">{{count($comments[0]->comments) }}
                                    @if(count($comments[0]->comments)>1)
                                        Comments
                                    @else
                                        Comment
                                    @endif

                                    </h2>
                            </div>
                            <ul class="comment-list">
@foreach($post->comments as $comment)
                                <li class="comment">

                                    {{$comment->id}}
                                    <div class="comment-body">
                                        <h3>{{$comment->name}}</h3>
                                        <div class="meta">{{$comment->created_at}}</div>
                                        <p>{{$comment->message}}</p>
{{--                                        <p><a href="#" class="reply">Reply</a></p>--}}
                                        <p>
                                            <button class="reply" type="button" data-toggle="collapse" data-target="#collapseExample{{$comment->id}}" aria-expanded="false" aria-controls="collapseExample">
                                                Reply
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapseExample{{$comment->id}}">
                                            <div class="card card-body">

{{--                                                #####LEVEL 1 REPLY #######--}}


                                                <form action="/pages/single_blog/{{$comments[0]->id}}" method="POST" class="p-5 bg-light" id="reply_form">

                                                    <div id="r_msg"></div>
                                                    <div class="r_print-error-msg">
                                                        <ul>

                                                        </ul>
                                                    </div>

                                                    <input type="hidden" name="action" value="reply">
                                                    @csrf
                                                    <div class="form-group">
                                                        {{--                                        <label for="Post_id">post_id</label>--}}
                                                        <input type="number" class="form-control" name="post_id" value="{{$post->id}}">
                                                        <input type="number" class="form-control" name="comment_id" value="{{$comment->id}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="r_name">Name *</label>
                                                        <input type="text" class="form-control" name="name" id="r_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="r_email">Email *</label>
                                                        <input type="email" class="form-control" name="email" id="r_email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="r_message">Message *</label>
                                                        <textarea name="message" id="r_message" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        {{--                                        <input type="submit" name="subscribe" class="btn btn-primary py-3">--}}
                                                        <button type="submit" name="reply"  class="btn btn-secondary"><span class="icon-paper-plane"></span></button>

                                                    </div>
                                                </form>
{{--                                                #####LEVEL 1 REPLY #######--}}




                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        @foreach($comment->reply as $replies)

                                        <li class="comment">
{{--                                            <div class="vcard bio">--}}
{{--                                                <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                            </div>--}}
                                            <div class="comment-body">
                                                <h3>{{$replies->r_name}}</h3>
                                                <div class="meta">{{$replies->created_at}}</div>
                                                <p>{{$replies->r_message}}</p>
                                                <p>
                                                    <button class="reply" type="button" data-toggle="collapse" data-target="#collapseExample{{$replies->id}}" aria-expanded="false" aria-controls="collapseExample">
                                                        Reply
                                                    </button>
                                                </p>
                                                <div class="collapse" id="collapseExample{{$replies->id}}">
                                                    <div class="card card-body">


{{--                                                       #####LEVEL 2 REPLY #######--}}

                                                        <form action="/pages/single_blog/{{$comments[0]->id}}" method="POST" class="p-5 bg-light" id="reply_form">

                                                            <div id="r_msg"></div>
                                                            <div class="r_print-error-msg">
                                                                <ul>

                                                                </ul>
                                                            </div>

                                                            <input type="hidden" name="action" value="reply">
                                                            @csrf
                                                            <div class="form-group">
                                                                {{--                                        <label for="Post_id">post_id</label>--}}
                                                                <input type="number" class="form-control" name="post_id" value="{{$post->id}}">
                                                                <input type="number" class="form-control" name="comment_id" value="{{$comment->id}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="r_name">Name *</label>
                                                                <input type="text" class="form-control" name="name" id="r_name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="r_email">Email *</label>
                                                                <input type="email" class="form-control" name="email" id="r_email">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="r_message">Message *</label>
                                                                <textarea name="message" id="r_message" cols="30" rows="10" class="form-control"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                {{--                                        <input type="submit" name="subscribe" class="btn btn-primary py-3">--}}
                                                                <button type="submit" name="reply"  class="btn btn-secondary"><span class="icon-paper-plane"></span></button>

                                                            </div>
                                                        </form>

{{--                                                        #####LEVEL 2 REPLY END #######--}}

                                            </div>

                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>

                            <div class="comment-form-wrap pt-5">
                                <div class="section-title">
                                    <h2 class="mb-5">Leave a comment</h2>
                                </div>


                                ##### COMMENT #######
                                <form action="/pages/single_blog/{{$comments[0]->id}}" method="POST" class="p-5 bg-light" id="Comment_form">

                                    <div id="msg"></div>
                                    <div class="print-error-msg">
                                        <ul>

                                        </ul>
                                    </div>


                                    @csrf
                                    <input type="hidden" name="action" value="comment">
                                    <div class="form-group">
{{--                                        <label for="Post_id">post_id</label>--}}
                                        <input type="hidden" class="form-control" name="post_id" value="{{$comments[0]->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
{{--                                        <input type="submit" name="subscribe" class="btn btn-primary py-3">--}}
                                        <button type="submit" name="comment" id="subscribe_b" class="btn btn-secondary"><span class="icon-paper-plane"></span></button>

                                    </div>
                                </form>

{{--                                ##### COMMENT #######--}}



                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-3 ml-auto">
                    <div class="section-title">
                        <h2>Popular Posts</h2>
                    </div>
                    <div class="trend-entry d-flex">
                        <div class="number align-self-start">01</div>
                        <div class="trend-contents">
                            <h2><a href="#">News Needs to Meet Its Audiences Where They Are</a></h2>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="trend-entry d-flex">
                        <div class="number align-self-start">02</div>
                        <div class="trend-contents">
                            <h2><a href="#">News Needs to Meet Its Audiences Where They Are</a></h2>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="trend-entry d-flex">
                        <div class="number align-self-start">03</div>
                        <div class="trend-contents">
                            <h2><a href="#">News Needs to Meet Its Audiences Where They Are</a></h2>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="trend-entry d-flex pl-0">
                        <div class="number align-self-start">04</div>
                        <div class="trend-contents">
                            <h2><a href="#">News Needs to Meet Its Audiences Where They Are</a></h2>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        <a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            $("#Comment_form").submit(function (e) {
                e.preventDefault();
                alert("jquery is working");
                let form=$(this);
                let data=$(form).serialize();
                let action= $(form).attr('action');

                $.ajax({
                    url:action,
                    type:"POST",
                    data:data,
                    success: function(response) {
                        if($.isEmptyObject(response.error)){
                            $('#msg').removeClass('.alert alert-danger').addClass('.alert alert-success');
                            $('#msg').text(response.success);
                        }
                        else{
                            // $('#msg').removeClass('.alert alert-success').addClass('.alert alert-danger');
                            // $('#msg').text(response.error);
                            printErrorMsg(response.error);
                        }
                    }
                });


            });

            $("#reply_form").submit(function (e) {
                e.preventDefault();
                alert("jquery is working");
                let form=$(this);
                let data=$(form).serialize();
                let action= $(form).attr('action');

                $.ajax({
                    url:action,
                    type:"POST",
                    data:data,
                    success: function(response) {
                        if($.isEmptyObject(response.error)){
                            $('#r_msg').removeClass('.alert alert-danger').addClass('.alert alert-success');
                            $('#r_msg').text(response.success);
                        }
                        else{
                            // $('#msg').removeClass('.alert alert-success').addClass('.alert alert-danger');
                            // $('#msg').text(response.error);
                            printErrorMsg(response.error);
                        }
                    }
                });


            });


            function printErrorMsg (msg) {
                $(".r_print-error-msg").find("ul").html('');
                $(".r_print-error-msg").css('display', 'block');
                $.each(msg, function (key, value) {
                    $(".r_print-error-msg").find("ul").append('<li class="alert-danger my-2">' + value + '</li>');
                });
            }

        });




    </script>



    <!-- Mirrored from colorlib.com/preview/theme/meranda/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 13:39:58 GMT -->
@endsection
