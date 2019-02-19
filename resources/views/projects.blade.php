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
                            <div class="first-project-img"
                                 style="background-image: url({{ Voyager::image( $project->introduction_img ) }})">
                                <div class="project-img-filter">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <a href="project/{{$project->id}}"><h5>{{ $project->title }}</h5></a>
                            <p>{!! str_limit($project->introduction, 100) !!}</p>
                        </div>

                    @elseif ($loop->index)
                        <div class="col-4">
                            <div class="project-img"
                                 style="background-image: url({{ Voyager::image( $project->introduction_img ) }})">
                                <div class="project-img-filter">
                                </div>
                            </div>

                            <a href="project/{{$project->id}}"><h5>{{ $project->title }}</h5></a>
                            <i>{{ $project->start_date->format('F Y') }} - </i>
                            <i>{{ $project->end_date->format('F Y') }}</i>
                            <p>{!! str_limit($project->body, 100) !!}</p>
                        </div>

                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
