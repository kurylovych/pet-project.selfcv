@extends('layouts.app')

@section('content')

    <div>
        <div class="container-fluid projects-introduction">
            @include('inc.navbar')
        </div>

        <div class="container projects-list">
            <div class="row">
                <div class="col-8"><img src="{{ Voyager::image( $project->conclusion_img ) }}" style="width: 100%"></div>
            </div>
        </div>

        {{--{{ $project->title }}--}}

        {{--@php $pictures = json_decode($project->body_collage); @endphp--}}
        {{--@foreach($pictures as $pic)--}}
        {{--<img src="{{ Voyager::image( $pic ) }}" style="width:100px">--}}
        {{--@endforeach--}}


    </div>
@endsection
