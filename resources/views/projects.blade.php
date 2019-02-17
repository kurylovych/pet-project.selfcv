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
                            </div>
                        </div>
                        <div class="col-6">
                            <a href="project/{{$project->id}}"><h5>{{ $project->title }}</h5></a>
                        </div>

                    @elseif ($loop->index)
                        <div class="col-4">
                            {{--<img src="{{ Voyager::image( $project->introduction_img ) }}">--}}

                            <div class="project-img"
                                 style="background-image: url({{ Voyager::image( $project->introduction_img ) }})">
                            </div>

                            <a href="project/{{$project->id}}"><h5>{{ $project->title }}</h5></a>
                        </div>

                    @endif
                @endforeach
            </div>

            {{--@php $pictures = json_decode($project->body_collage); @endphp--}}
            {{--@foreach($pictures as $pic)--}}
            {{--<img src="{{ Voyager::image( $pic ) }}" style="width:100px">--}}
            {{--@endforeach--}}

        </div>
    </div>
@endsection
