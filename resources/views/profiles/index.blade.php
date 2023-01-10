@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{$user->profile->profileImage()}}" alt="" class="rounded-circle w-75">
            </div>
        </div>
        <div class="col-9 ps-5">
            <div class="profile-title d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="profile-stats d-flex mt-4">
                <div class="div me-2"><strong>{{$user->posts->count()}}</strong> bejegyzés</div>
                <div class="div me-2"><strong>120e</strong> követő</div>
                <div class="div me-2"><strong>350</strong> követés</div>
            </div>
            <div class="profile-desc mt-4">
                <div class="fw-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div>
                    <a href="https://www.freecodecamp.org/" target="_blank">{{$user->profile->url}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img class="w-100" src="/storage/{{$post->image}}" alt="">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection