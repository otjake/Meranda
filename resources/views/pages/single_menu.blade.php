@extends('layouts.app')
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row">
                @foreach($contents as $content)
                <div class="col-lg-8 single-content">
                    <p class="mb-5">
                        <img src="{{asset($content->post_img)}}" alt="Image" class="img-fluid">
                    </p>
                    <h1 class="mb-4">
                        {{$content->post_title}}
                    </h1>
                    <div class="post-meta d-flex mb-5">
                        <div class="bio-pic mr-3">
                            <img src="{{asset($content->post_img)}}" alt="Image" class="img-fluidid">
                        </div>
                        <div class="vcard">
                            <span class="d-block"><a href="#">{{$content->post_author}}</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                        </div>
                    </div>
                    <p>{{substr($content->post_body,0,200)}}</p>

                    <div class="pt-5">
                        <p>Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
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
