@extends('layouts.app')

@section('content')

	<div>

		<h1>It works!</h1>
        {{ $project->title }}

        <img src="{{ Voyager::image( $project->conclusion_img ) }}" style="width: 100%">

	</div>
@endsection
