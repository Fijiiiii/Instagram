@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="{{$user->profile->profileImage()}}" style="height: 200px"alt="Logo" class="w-100 rounded-circle">
        </div>
        <div class="col-9 p-5">
                <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <h1>{{$user->username}}</h1>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                @can('update',$user->profile)
                <a href='/p/create' class="btn btn-primary">add new post</a>
                @endcan
            </div>
            @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pe-5"><strong>{{$user->posts->count()}}</strong>Posts</div>
                <div class="pe-5"><strong>300</strong>Following</div>
                <div class="pe-5"><strong>50M</strong>Followers</div>
            </div>

            <div class="pt-4 font-wight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href={{$user->profile->url}}>Facebook</a></div>
        </div>
    </div>
    <div class="row">
    @foreach($user->Posts as $post)
        <div class="col-4 pb-3">
            <a href="/p/{{$post->id}}">
            <img src="/storage/{{$post->image}}" alt="ig1" class="w-100">
            </a>
        </div>
    @endforeach
    </div>
</div> 

@endsection
