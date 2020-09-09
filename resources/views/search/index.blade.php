@extends('layouts.app')

@section('content')
<div class="container px-5">
  <div class="row">
    <div class="col-8 offset-2 text-center">
      <h1>All profiles</h1>
    </div>
  </div>
  <div class="container">
    @foreach($profiles as $profile)
    <div class="row py-3">
      <div class="col-6 offset-3 d-flex align-items-baseline">
        <div class="mr-3">
          <a href="/profile/{{ $profile->user->id }}">
            <img src="{{ $profile->profileImage() }}" alt="" class="rounded-circle" style="height: 50px;">
          </a>
        </div>
        <div>
          <a href="/profile/{{ $profile->user->id }}">
            <h3 class="text-dark">{{ $profile->user->username }}</h3>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection