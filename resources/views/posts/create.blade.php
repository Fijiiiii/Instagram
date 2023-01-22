@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/p" method="post" enctype="multipart/form-data">
        @csrf
        <div class="divicol-8 offset-2">
        <div class="row">
            <h1>Add New Post</h1>
        </div>

        <div class="div form-group row">
            <label for="caption">Post Caption</label>
            <input 
            type="text"
            id="caption"
            class="form-control @error('caption') is-invalid @enderror"
            name="caption"
            value="{{old('caption') }}"
            autocomplete="caption" autofocus
            >
            @error('caption')

            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="caption">Add Image</label>
            <input 
            type="file"
            id="image"
            class="form-control-file"
            name="image"
            >
            @error('caption')
                <strong>{{$message}}</strong>
            @enderror

            <div class="d-row pt-4">
                <button type="submit" class="btn btn-primary">Add New Post</button>
            </div>

        </div>
        </div>
    </form>
    </div>
</div> 

@endsection
