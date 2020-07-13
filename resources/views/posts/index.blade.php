@extends('layouts.app')

@section('content')
<div class="container px-5">
	@foreach($posts as $post)
	<div class="row">
		<div class="col-6 offset-3">
			<a href="/profile/{{ $post->user->id }}"><img class="w-100" src="/storage/{{ $post->image }}" alt=""></a>
		</div>
	</div>
	<div class="row">
		<div class="col-6 offset-3 pb-4 pt-2">
			<div>
				<p>
					<span class="font-weight-bold pr-1">
						<a href="/profile/{{ $post->user->id }}">
							<span class="text-dark">{{ $post->user->username }}</span>
						</a>
					</span>{{ $post->caption }}
				</p>
			</div>
		</div>
	</div>
	@endforeach
	<div class="row">
		<div class="col-12 d-flex justify-content-center">
			{{ $posts->links() }}
		</div>
	</div>
</div>
@endsection