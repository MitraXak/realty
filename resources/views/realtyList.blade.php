@extends('index')

@section('content')
    <div class="content">
        <div class="row">
            @foreach ($tasks as $task)
                <div class="col s12 m12">
                    <h3 class="header">{{ $task -> namelk }}</h3>
                    <div class="card horizontal">
                        <div class="card-image">
                            @foreach ($images as $image)
                                @if ($image -> realty_id == $task -> id)
                                    <img src="/images/{{ $image -> path }}">
                                    @break
                                @endif
                            @endforeach
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>{{ $task -> address}}
                                {{ $task -> imglk }}
                                <br/>
                                {{ Str::limit( $task -> description, 150)}}...</p>
                            </div>
                            <div class="card-action">
                                <a href="{{ $task -> id}}.html">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection