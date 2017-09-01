@extends('layout')

@section('content')
    <h1>New Post</h1>
    <form class="form-horizontal" method='post' action='/posts'>
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name='title' class="form-control" id="title" placeholder="Title" required>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="url" name='image' class="form-control" id="image" placeholder="Image URL" required>
        </div>
        <div class='form-group'>
            <label for='content'>Post Content</label>
            <textarea class="form-control" name='content' id='content' rows="3" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
        @include('partials.errors')
    </form>

@endsection