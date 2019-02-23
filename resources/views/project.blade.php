@extends('layouts.app')

@section('content')

    <div>
        <div class="container-fluid projects-introduction">
            @include('inc.navbar')

            {!! $project->introduction !!}
        </div>

        <div class="container single-project">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-project-image">
                        <img src="{{ Voyager::image( $project->body_collage ) }}"
                             style="width: 100%">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-project-description">
                        <h5>About Project</h5>
                        <p>{!! $project->body !!}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="conclusion">
                        <div class="conclusion-text">
                            <h5>Conclusion</h5>
                            <p>{!! $project->conclusion !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12"><img src="{{ Voyager::image( $project->conclusion_img ) }}" style="width: 100%">
                </div>
            </div>
        </div>

        {{--{{ $project->title }}--}}

        {{--@php $pictures = json_decode($project->body_collage); @endphp--}}
        {{--@foreach($pictures as $pic)--}}
        {{--<img src="{{ Voyager::image( $pic ) }}" style="width:100px">--}}
        {{--@endforeach--}}


    </div>
@endsection
