@extends('layouts.app')

@section('content')

	<div>

		@foreach($abouts as $about)
			<img src="{{ Voyager::image( $about->signature ) }}" style="width:100px">
			<h1>{{ $about->title }}</h1>
		@endforeach

		@foreach($contacts as $contact)
			<h1>{{ $contact->resource_name }}</h1>
		@endforeach

		@foreach($comments as $comment)
			<img src="{{ Voyager::image( $comment->author_img ) }}" style="width:100px">
			<h1>{{ $comment->author_name }}</h1>
		@endforeach

	</div>
@endsection