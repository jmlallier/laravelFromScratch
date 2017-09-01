@extends ('layout')

@section('jumbo')
    @include ('partials.jumbo')
@endsection

@section('content')

    <div class="row">
        @foreach ($posts as $post)
            @include('post')
        @endforeach
    </div>
@endsection