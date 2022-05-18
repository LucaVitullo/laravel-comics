@extends('app')

@section('main')
    <main>
        <div class="container">
            <div class="contents">
                @foreach ($comics as $comic)
                    <div class="box">

                        <img src="{{ $comic['thumb'] }}" alt="img">
                        <p>{{ $comic['title'] }}</p>

                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
