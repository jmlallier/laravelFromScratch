@extends ('layout')

@section('content')
    <div class="row">
        @foreach ($posts as $post)
            @include('post')
        @endforeach
    </div>
@endsection