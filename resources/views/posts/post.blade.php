<div class="card">
    <div class='image'>
        <img src="{{$post->image}}" alt="{{$post->title}}">
    </div>
    <div class='details'>
        Posted by <span class='author'>{{$post->user->name}}</span> on <span class='date'>{{$post->created_at->toFormattedDateString()}}</span>
    </div>
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <p class="card-text">{{$post->content}}</p>
</div>