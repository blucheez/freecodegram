@extends('layouts.app') @section('content')
<div class="container post">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100 post-img" />
            </a>
        </div>
    </div>
    <div class="row">

        <div class="col-6 offset-3 pt-2 pb-4">
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

    @endforeach
    <div class="row col-12 d-flex justify-content-center">
        {{$posts->links()}}
    </div>
</div>
@endsection