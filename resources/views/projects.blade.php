@extends('layouts.app')

@section('content')

    <div>
        <div class="container-fluid projects-introduction">
            @include('inc.navbar')
        </div>

        <div class="container projects-list">
            <div class="row">

                @foreach($projects as $project)

                    @if ($loop->first)
                        <div class="col-6">
                            <a href="project/{{$project->id}}">
                                <div class="title-project-image"
                                     style="background-image: url({{ Voyager::image( $project->introduction_img ) }})">
                                    <div class="filter">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 title-project-text">
                            <a href="project/{{$project->id}}">
                                <h5>{{ $project->title }}</h5>
                            </a>
                            <p>{!! str_limit($project->body, 400) !!}</p>
                            <i>{{ $project->start_date->format('F Y') }} - </i>
                            <i>{{ $project->end_date->format('F Y') }}</i>
                        </div>

                    @elseif ($loop->index)
                        <div class="col-4 general-project">
                            <a href="project/{{$project->id}}">
                                <div class="general-project-image"
                                     style="background-image: url({{ Voyager::image( $project->introduction_img ) }})">
                                    <div class="filter">
                                    </div>
                                </div>
                            </a>
                            <div class="general-project-text">
                                <i>{{ $project->start_date->format('F Y') }} - </i>
                                <i>{{ $project->end_date->format('F Y') }}</i>
                                <a href="project/{{$project->id}}">
                                    <h5>{{ $project->title }}</h5>
                                </a>
                                <p>{!! str_limit($project->body, 200) !!}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>

    </div>
@endsection
