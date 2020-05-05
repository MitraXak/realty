@extends('index')
@section('content')
    <article>
        <h2>{{ $posts -> namelk }}</h2>
        <p>{{ $posts -> address}}</p>
        <div class="row">
            <div class="col s12 m12">
                @foreach ($images as $image)
                    @if ($image -> realty_id == $posts -> id )
                        <img width="40%" height="40%"   src="/images/{{ $image -> path }}">
                    @endif
                @endforeach
            </div>
        </div>
        <p>{{ $posts -> description}}</p>
    </article>
@endsection