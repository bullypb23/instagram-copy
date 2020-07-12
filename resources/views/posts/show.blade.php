@extends('layouts.app')

@section('content')
<div class="container px-5">
	<div class="row">
		<div class="col-8">
			<img class="w-100" src="/storage/{{ $post->image }}" alt="">
		</div>
		<div class="col-4">
			<div>
				<div class="d-flex align-items-center">
					<div class="pr-3">
						<img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;" alt="Profile image">
					</div>
					<div>
						<div class="font-weight-bold">
							<a href="/profile/{{ $post->user->id }}">
								<span class="text-dark">{{ $post->user->username }}</span>
							</a>
							<a href="#" class="pl-3">Follow</a>
						</div>
					</div>
				</div>
				<hr>
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
</div>
@endsection