@extends('layouts.app')
@section('content')
    <div class="site-section py-0">
        <div class="owl-carousel hero-slide owl-style">
            @foreach($Editors_picks as $editor_pick)
            <div class="site-section">
                <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                        <div class="img-bg" style="background-image: url('{{asset($editor_pick->post_img)}}')"></div>
                        <div class="contents">
                            <span class="caption">editor's pick</span>
                            <h2><a href="/pages/single_blog/{{$editor_pick->id}}">{{$editor_pick->post_title}}</a></h2>
                            <p class="mb-3">{{substr($editor_pick->post_body,0,50)}}</p>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">{{$editor_pick->post_author}}</a></span>
                                <span class="date-read">{{$editor_pick->created_at}}<span class="mx-1">&bullet;</span><span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2>Editor's Pick</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-entry-1">
                                <a href="/pages/single_blog/{{$editor_pick->id}}"><img src="{{$editor_pick->post_img}}" alt="Image" class="img-fluid"></a>
                                <h2><a href="/pages/single_blog/{{$editor_pick->id}}">{{$editor_pick->post_title}}</a></h2>
                                <p>{{substr($editor_pick->post_body,0,200)}}</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">{{$editor_pick->post_author}}</a> in <a href="#">News</a></span>
                                    <span class="date-read">{{$editor_pick->created_at}}<span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @foreach($Editors_picks as $editor_pick)
                            <div class="post-entry-2 d-flex bg-light">
                                <div class="thumbnail" style="background-image: url('{{asset($editor_pick->post_img)}}')"></div>
                                <div class="contents">
                                    <h2><a href="/pages/single_blog/{{$editor_pick->id}}">{{$editor_pick->post_title}}</a></h2>
                                    <div class="post-meta">
                                        <span class="d-block"><a href="#">{{$editor_pick->post_author}}</a> in <a href="#">News</a></span>
                                        <span class="date-read">{{$editor_pick->created_at}}<span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title">
                        <h2>Trending</h2>
                    </div>
                    @php
                    $count=1
                    @endphp
                    @foreach($trends as $trend)
                    <div class="trend-entry d-flex">
                        <div class="number align-self-start">{{$count++}}</div>
                        <div class="trend-contents">
                            <h2><a href="/pages/single_blog/{{$editor_pick->id}}">{{$trend->post_title}}</a></h2>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">{{$trend->post_author}}</a> </span>
                                <span class="date-read">{{$trend->created_at}}<span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="trend-entry d-flex">--}}
{{--                        <div class="number align-self-start">02</div>--}}
{{--                        <div class="trend-contents">--}}
{{--                            <h2><a href="/pages/single_blog/{{$editor_pick->id}}">News Needs to Meet Its Audiences Where They Are</a></h2>--}}
{{--                            <div class="post-meta">--}}
{{--                                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>--}}
{{--                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="trend-entry d-flex">--}}
{{--                        <div class="number align-self-start">03</div>--}}
{{--                        <div class="trend-contents">--}}
{{--                            <h2><a href="/pages/single_blog/{{$editor_pick->id}}">News Needs to Meet Its Audiences Where They Are</a></h2>--}}
{{--                            <div class="post-meta">--}}
{{--                                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>--}}
{{--                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="trend-entry d-flex">--}}
{{--                        <div class="number align-self-start">04</div>--}}
{{--                        <div class="trend-contents">--}}
{{--                            <h2><a href="/pages/single_blog/{{$editor_pick->id}}">News Needs to Meet Its Audiences Where They Are</a></h2>--}}
{{--                            <div class="post-meta">--}}
{{--                                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>--}}
{{--                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <p>
                        <a href="#" class="more">See All Trends <span class="icon-keyboard_arrow_right"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-0">
        <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
                <div class="img-bg" style="background-image: url('{{asset($editor_pick->post_img)}}')"></div>
                <div class="contents">
                    <span class="caption">Editor's Pick</span>
                    <h2><a href="/pages/single_blog/{{$editor_pick->id}}">{{$editor_pick->post_title}}</a></h2>
                    <p class="mb-3">{{substr($editor_pick->post_img,0,200)}}</p>
                    <div class="post-meta">
                        <span class="d-block"><a href="#">{{$editor_pick->post_author}}</a> in <a href="#">Food</a></span>
                        <span class="date-read">{{$editor_pick->created_at}}<span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">

            @foreach($headline_posts as $post)
                <div class="col-lg-6">
                    @if(count($post->Post) !=0)
                    <div class="section-title">
                        <h2>{{$post->headline_title}}</h2>
                    </div>
                    @foreach($post->Post as $content)

                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail" style="background-image: url('{{asset($content->post_img)}}')"></div>
                        <div class="contents">
                            <h2><a href="/pages/single_blog/{{$editor_pick->id}}">{{$content->post_title}}</a></h2>
                            <p class="mb-3">{{$content->post_body}}</p>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">{{$content->post_author}}</a> in <a href="#">News</a></span>
                                <span class="date-read">{{$content->created_at}}<span class="mx-1">&bullet;</span><span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h2>Recent News</h2>
                    </div>
                    @foreach($recent_posts as $new)
                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail order-md-2" style="background-image: url('{{asset($new->post_img)}}')"></div>
                        <div class="contents order-md-1 pl-0">
                            <h2><a href="/pages/single_blog/{{$editor_pick->id}}">{{$new->post_title}}</a></h2>
                            <p class="mb-3">{{$new->post_body}}</p>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">{{$new->post_author}}</a> </span>
                                <span class="date-read">{{$new->created_at}} <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="col-lg-3">
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
            <div class="row">
                <div class="col-lg-6">
                    <ul class="custom-pagination list-unstyled">
{{--                        <li><a href="#">1</a></li>--}}
{{--                        <li class="active">2</li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li><a href="#">4</a></li>--}}
                        <li>{{ $recent_posts->links() }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('includes.footer')
@endsection

