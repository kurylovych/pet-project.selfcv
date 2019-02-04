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

		{{--@foreach($abouts as $about)--}}
			{{--<img src="{{ Voyager::image( $about->signature ) }}" style="width:100px">--}}
			{{--<h1>{{ $about->title }}</h1>--}}
		{{--@endforeach--}}

		{{--@foreach($contacts as $contact)--}}
			{{--<h1>{{ $contact->resource_name }}</h1>--}}
		{{--@endforeach--}}

		{{--@foreach($comments as $comment)--}}
			{{--<img src="{{ Voyager::image( $comment->author_img ) }}" style="width:100px">--}}
			{{--<h1>{{ $comment->author_name }}</h1>--}}
		{{--@endforeach--}}

	</div>
@endsection