@extends('layouts.app')

@section('content')

    <div>
        <div class="container-fluid introduction">

            @foreach($intros as $intro)
                <div class="row">
                    <div class="col-6">
                        <div class="intro-data">
                            <h1>{{ $intro->name }}</h1>
                            <h5>{{ $intro->position }}</h5>
                        </div>
                    </div>
                    <div class="col-6 intro-image">
                        <img src="{{ Voyager::image( $intro->img ) }}">
                    </div>
                </div>
            @endforeach

        </div>

        <div class="container description">
            <div class="row">
                <div class="col-12">
                    <div class="about">
                        @foreach($website_headers as $website_header)
                            @if ($website_header->name == 'About me')
                                <h2>{{$website_header->name}}</h2>
                            @endif
                        @endforeach

                        @foreach($abouts as $about)
                            <p>{!! $about->text !!}</p>
                            <img src="{{ Voyager::image( $about->signature ) }}" style="width:100px">
                        @endforeach
                    </div>
                    <div class="contact-buttons">
                        @foreach($contacts as $contact)
                            @if ($contact->resource_name == 'email')
                                <a href="mailto:{{ $contact->url }}">{{ $contact->resource_name }}</a>
                            @else
                                <a href="{{ $contact->url }}">{{ $contact->resource_name }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-4">
                    <div class="overview-box">
                        @foreach($website_headers as $website_header)
                            @if ($website_header->name == 'Education')
                                <h2>{{$website_header->name}}</h2>
                            @endif
                        @endforeach
                        @foreach($educs as $educ)
                            <i>{{ $educ->start_date }}</i>
                            <i>{{ $educ->end_date }}</i>
                            <span>{{ $educ->degree }}</span>
                            <b>{{ $educ->specialization }}</b>
                            <span>{{ $educ->university }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-4">
                    <div class="overview-box">
                        @foreach($website_headers as $website_header)
                            @if ($website_header->name == 'Experience')
                                <h2>{{$website_header->name}}</h2>
                            @endif
                        @endforeach
                        @foreach($jobs as $job)
                            <i>{{ $job->start_date }}</i>
                            <i>{{ $job->end_date }}</i>
                            <b>{{ $job->position }}</b>
                            <span>{{ $job->company }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-4">
                    <div class="overview-box">
                        @foreach($website_headers as $website_header)
                            @if ($website_header->name == 'Skills')
                                <h2>{{$website_header->name}}</h2>
                            @endif
                        @endforeach
                        @foreach($skill_threes as $skillset)
                            <span>{{ $skillset->skill_name }}</span>
                        @endforeach
                        {{--{{ dd(get_defined_vars()) }}--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            @foreach($website_headers as $website_header)
                @if ($website_header->name == 'Projects')
                    <h2>{{$website_header->name}}</h2>
                @endif
            @endforeach
            <div class="row">

                @foreach($projects as $project)
                    <div class="col-4">
                        <div class="project">

                            {{--<h5>{{ $project->title}}</h5>--}}
                            <img src="{{ Voyager::image( $project->introduction_img ) }}">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach($website_headers as $website_header)
                        @if ($website_header->name == 'Recommendations')
                            <h2>{{$website_header->name}}</h2>
                        @endif
                    @endforeach
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach( $comments as $comment )
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="comment-section">
                                        <div class="comment-content">

                                            <img src="{{ Voyager::image( $comment->author_img ) }}">

                                            <p>{!! $comment->comment_text !!}</p>

                                            <b>{{$comment->author_name}}</b>
                                            <span>{{$comment->author_possition}}</span>

                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        {{--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
        {{--<div class="carousel-inner">--}}
        {{--<div class="carousel-item active">--}}
        {{--11111--}}
        {{--</div>--}}
        {{--<div class="carousel-item">--}}
        {{--22--}}
        {{--</div>--}}
        {{--<div class="carousel-item">--}}
        {{--333333333333333--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
        {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}
        {{--<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
        {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}
        {{--</div>--}}

        {{--@foreach($comments as $comment)--}}
        {{--<p>{!! $comment->comment_text !!}</p>--}}
        {{--@endforeach--}}

        {{--@foreach($comments as $comment)--}}
        {{--<img src="{{ Voyager::image( $comment->author_img ) }}" style="width:100px">--}}
        {{--<h1>{{ $comment->author_name }}</h1>--}}
        {{--@endforeach--}}

    </div>
@endsection
