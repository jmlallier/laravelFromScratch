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
                <div class='post-content'>
                    <p>{{$post->content}}</p>
                </div>
                <hr>
                <div class='post-comments'>
                    <ul class='comments-list list-group'>
                        @forelse($post->comments as $comment)
                            <li class='list-group-item'>
                                <strong>{{$comment->created_at->diffForHumans()}}:&nbsp;</strong>
                                {{$comment->content}}
                            </li>
                        @empty
                            <li class='list-group-item'>Nobody has commented on this post, yet.</li>
                        @endforelse
                    </ul>
                    <hr>
                    <div class='new-comment'>
                        <h4>Post a comment</h4>
                        <form method='POST' action='/posts/{{$post->id}}/comments'>
                            {{csrf_field()}}
                            <div class='form-group'>
                                <label for='content'>
                                    Comment:
                                </label>
                                <textarea name='content' id='content' class='form-control' required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Comment</button>
                            </div>
                        </form>
                        @include('partials.errors')
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection