@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="divicol-8 offset-2">
        <div class="row">
            <h1>Edit Profile</h1>
        </div>

        <div class="div form-group row">
            <label for="title">Title</label>
            <input 
            type="text"
            id="title"
            class="form-control @error('title') is-invalid @enderror"
            name="title"
            
            value="{{old('title') ?? ($user->profile->title) }}"
            autocomplete="title" autofocus
            >
            @error('title')

            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="div form-group row">
            <label for="description">Description</label>
            <textarea 
            name="description" 
            id="" cols="30" 
            rows="5"
            class="form-control @error('description') is-invalid @enderror"
            autocomplete="description" autofocus>{{old('description') ?? ($user->profile->description) }}
            </textarea>
            
            @error('description')

            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>



        <div class="div form-group row">
            <label for="url">URL</label>
            <input 
            type="text"
            id="url"
            class="form-control @error('url') is-invalid @enderror"
            name="url"
            value="{{old('url') ?? ($user->profile->url) }}"
            autocomplete="url" autofocus
            >
            @error('url')

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
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>

        </div>
        </div>
    </form>
    </div>
</div> 

@endsection
