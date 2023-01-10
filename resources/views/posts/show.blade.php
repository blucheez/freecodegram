@extends('layouts.app') @section('content')
<div class="container post">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100 post-img" />
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="post-profile-img pe-3">
                    <img src="{{ $post->user->profile->profileImage() }}" alt="" class="" />
                </div>
                <div>
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="fw-bold">{{ $post->user->username }}
                        </span>
                    </a>
                    <a href="#" class="ps-2 fw-bold follow-link">Follow</a>
                </div>
            </div>
            <hr />
            <p>
                <span class="fw-bold">
                    <a href="/profile/{{ $post->user->id }}">
                        <span>{{ $post->user->username }}
                        </span>
                    </a>
                </span>
                {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection