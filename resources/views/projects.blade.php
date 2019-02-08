@extends('layouts.app')

@section('content')

	<div>

		@foreach($projects as $project)
			<a href="project/{{$project->id}}"><h1>{{ $project->title }}</h1></a>



			{{--@php $pictures = json_decode($project->body_collage); @endphp--}}
			{{--@foreach($pictures as $pic)--}}
				{{--<img src="{{ Voyager::image( $pic ) }}" style="width:100px">--}}
			{{--@endforeach--}}

		@endforeach

	</div>
@endsection
