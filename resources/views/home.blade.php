@extends('layouts.app')

@section('content')

    <div>
        <div class="container-fluid introduction">
            @include('inc.navbar')

            @foreach($intros as $intro)
                <div class="row">
                    <div class="col-6">
                        <div class="intro-data">
                            <h1>{{ $intro->name }}</h1>
                            <h5>{{ $intro->position }}</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="intro-image">
                            <img src="{{ Voyager::image( $intro->img ) }}">
                        </div>
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
                        @foreach($links as $link)
                            @if ($link->resource_name == 'email')
                                <a href="mailto:{{ $link->url }}">{{ $link->resource_name }}</a>
                            @else
                                <a href="{{ $link->url }}">{{ $link->resource_name }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-4">
                    <div class="overview-box">
                        @foreach($website_headers as $website_header)
                            @if ($website_header->name == 'Education')
                                <h3>{{$website_header->name}}</h3>
                            @endif
                        @endforeach

                            {{--@foreach($statements as $operation)--}}
                                {{--<tr> <td>{{ date("F", mktime(0, 0, 0, $operation->date, 1)) }}</td></tr>--}}
                            {{--@endforeach--}}

                        @foreach($educs as $educ)
                            <div class="overview-content">
                                <div class="date">
                                    <i>{{ $educ->start_date->format('F Y') }} - </i>
                                    <i>{{ $educ->end_date->format('F Y') }}</i>
                                </div>
                                <span>{{ $educ->degree }}</span>
                                <b>{{ $educ->specialization }}</b>
                                <span>{{ $educ->university }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-4">
                    <div class="overview-box">
                        @foreach($website_headers as $website_header)
                            @if ($website_header->name == 'Experience')
                                <h3>{{$website_header->name}}</h3>
                            @endif
                        @endforeach
                        @foreach($jobs as $job)
                            <div class="overview-content">
                                <i>{{ $job->start_date->format('F Y') }} - </i>
                                <i>{{ $job->end_date->format('F Y') }}</i>
                                <b>{{ $job->position }}</b>
                                <span>{{ $job->company }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-4">
                    <div class="overview-box">
                        @foreach($website_headers as $website_header)
                            @if ($website_header->name == 'Skills')
                                <h3>{{$website_header->name}}</h3>
                            @endif
                        @endforeach
                        @foreach($skill_threes as $skillset)
                            <div class="skills">
                                <span>{{ $skillset->skill_name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

        <div class="container project">
            @foreach($website_headers as $website_header)
                @if ($website_header->name == 'Projects')
                    <h2>{{$website_header->name}}</h2>
                @endif
            @endforeach
            <div class="row">

                @foreach($projects as $project)
                    <div class="col-4">
                        <div class="project-single">
                            <div class="project-img"
                                 style="background-image: url({{ Voyager::image( $project->introduction_img ) }})">

                            </div>
                            <h5>{{ $project->title}}</h5>
                            {{--<img src="{{ Voyager::image( $project->introduction_img ) }}">--}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="container comments">
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
    </div>
@endsection
