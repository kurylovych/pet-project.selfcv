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
                        @foreach($abouts as $about)
                            <h2>{{ $about->title }}</h2>
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
                    @foreach($educs as $educ)
                        <i>{{ $educ->start_date }}</i>
                        <i>{{ $educ->end_date }}</i>
                        <span>{{ $educ->degree }}</span>
                        <b>{{ $educ->specialization }}</b>
                        <span>{{ $educ->university }}</span>
                    @endforeach
                </div>
                <div class="col-4">
                    @foreach($jobs as $job)
                        <i>{{ $job->start_date }}</i>
                        <i>{{ $job->end_date }}</i>
                        <b>{{ $job->position }}</b>
                        <span>{{ $job->company }}</span>
                    @endforeach
                </div>
                <div class="col-4">
                    @foreach($skill_threes as $skillset)
                        <span>{{ $skillset->skill_name }}</span>
                    @endforeach
                        {{--{{ dd(get_defined_vars()) }}--}}

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
