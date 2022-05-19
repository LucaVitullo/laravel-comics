@extends('app')


@section('main')
    <div class="container-main-card">

    </div>
    <div class="bg-blue">
        <img src="{{ $comics['thumb'] }}" alt="{{ $comics['series'] }}">
    </div>
    <div class="section-main">
        <div class="container-infoCard">
            <h2>
                {{ $comics['title'] }}
            </h2>
            <div class="bann-green">
                <div class="price">
                    <span class="white">US.Price {{ $comics['price'] }}</span>
                    <span class="green">AVAILABLE</span>
                </div>
                <div class="check-availability">
                    Check Availability
                </div>
            </div>
            <div class="paragrafo">
                <p>
                    {{ $comics['description'] }}
                </p>
            </div>
        </div>
        <div class="advertisement">
            <img src="images/advertise.jpg" alt="">
        </div>
    </div>
@endsection
