@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="profile-img-container d-flex justify-content-center align-items-center">
                <img src="/assets/fcc_logo.png" alt="">
            </div>
        </div>
        <div class="col-9 ps-5">
            <div class="profile-title">
                <h1>freecodecamp</h1>
            </div>
            <div class="profile-stats d-flex mt-4">
                <div class="div me-2"><strong>500</strong> bejegyzés</div>
                <div class="div me-2"><strong>120e</strong> követő</div>
                <div class="div me-2"><strong>350</strong> követés</div>
            </div>
            <div class="profile-desc mt-4">
                <div class="fw-bold">freeCodeCamp.org</div>
                <div>We're a global community of millions of people learning to code together.</div>
                <div>
                    LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
                <div>
                    <a href="https://www.freecodecamp.org/" target="_blank">www.freecodecamp.org</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection