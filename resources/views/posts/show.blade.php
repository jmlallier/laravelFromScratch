@extends('layout')

@section('content')
    <div class='row'>
        <div class='col-sm-2' style='visibility:hidden;'>.</div>
        <div class='col-sm-8 blog-main'>
            <div class='single-post'>
                <div class='post-header'>
                    <h1 class='title'>{{$post->title}}</h1>
                    <div class='details'>
                        <span class='date'>{{$post->created_at->toFormattedDateString()}}</span>
                    </div>
                </div>
                <div class='post-image'>
                    <img src='{{$post->image}}' alt=''>
                </div>
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
@endsection