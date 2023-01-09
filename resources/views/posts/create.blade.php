@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1 class="display-5">Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">Post caption</label>
                    <input id="caption" type="text" class="form-control
                    @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"
                        autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>


                <div class="row">
                    <label for="name" class="col-md-4 col-form-label ">Post caption</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')

                    <strong>{{ $message }}</strong>

                    @enderror
                </div>

                <div class="row mt-4">
                    <button type="submit" class="btn btn-primary text-white">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection